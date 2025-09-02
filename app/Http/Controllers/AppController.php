<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Models\Meta;
use App\Models\PageContent;
use App\Models\Country;
use App\Models\Startup;
use App\Models\StartupCategory;
use App\Models\City;
use App\Models\ServiceCategory;
use App\Models\Service;
use App\Models\Event;
use App\Models\EventCategory;
use App\Models\Business;
use App\Models\BusinessCategory;
use App\Models\User;
use App\Models\UserProfile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager;
use League\HTMLToMarkdown\HtmlConverter;
use League\CommonMark\CommonMarkConverter;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class AppController extends Controller
{
    private $htmlConverter;
    private $markdownConverter;

    public function __construct()
    {
        $this->htmlConverter = new HtmlConverter([
            'header_style' => 'atx',
            'suppress_errors' => true,
            'strip_tags' => true,
            'remove_nodes' => 'script style',
        ]);
        $this->markdownConverter = new CommonMarkConverter([
            'html_input' => 'strip',
            'allow_unsafe_links' => false,
        ]);
    }

    private function getMeta($parameter = null)
    {
        $meta = new \StdClass();
        $meta->locale = LaravelLocalization::getCurrentLocale();
        $meta->language = LaravelLocalization::getCurrentLocaleName();
        $meta->languages = LaravelLocalization::getSupportedLocales();
        if (!empty($parameter)) {
            $metas = Meta::where([
                ['url', Route::currentRouteName()],
                ['parameter', $parameter]
            ])->whereIn('language', ['en', LaravelLocalization::getCurrentLocale()])->get();
            foreach ($metas as $metaSingle) {
                $meta->metas[$metaSingle->language] = $metaSingle;
            }
        } else {
            $metas = Meta::where('url', Route::currentRouteName())->whereIn('language', ['en', LaravelLocalization::getCurrentLocale()])->get();
            foreach ($metas as $metaSingle) {
                $meta->metas[$metaSingle->language] = $metaSingle;
            }
        }
        $contents = PageContent::where('url', Route::currentRouteName())->whereIn('language', ['en', LaravelLocalization::getCurrentLocale()])->get();
        foreach ($contents as $content) {
            $meta->contents[$content->language][$content->name] = $content->content;
        }
        return $meta;
    }

    private function isMarkdown($content)
    {
        $markdownPatterns = [
            '/^#{1,6}\s/m',             // Headers (with multiline modifier)
            '/\*\*.*?\*\*/',            // Bold
            '/\*[^*]+\*/',              // Italic (improved pattern)
            '/```/',                    // Code blocks
            '/^\s*[\*\-\+]\s/m',        // Unordered lists (with multiline modifier)
            '/^\s*\d+\.\s/m',           // Ordered lists (with multiline modifier)
            '/\[.*?\]\(.*?\)/',         // Links
            '/!\[.*?\]\(.*?\)/',        // Images
            '/^>\s/m',                  // Blockquotes (with multiline modifier)
        ];
        $markdownCount = 0;
        foreach ($markdownPatterns as $pattern) {
            if (preg_match($pattern, $content)) {
                $markdownCount++;
            }
        }
        return $markdownCount >= 1;
    }

    private function generateUniqueStartupSlug($name, $userId, $excludeId = null)
    {
        $baseSlug = Str::slug($name);
        $slug = $baseSlug;
        $counter = 1;
        while (true) {
            $query = Startup::where('slug', $slug);
            if ($excludeId) {
                $query->where('id', '!=', $excludeId);
            }
            if (!$query->exists()) {
                break;
            }
            $slug = $baseSlug . '-' . $counter;
            $counter++;
        }
        return $slug;
    }

    private function generateUniqueServiceSlug($name, $userId, $excludeId = null)
    {
        $baseSlug = Str::slug($name);
        $slug = $baseSlug;
        $counter = 1;
        while (true) {
            $query = Service::where('slug', $slug);
            if ($excludeId) {
                $query->where('id', '!=', $excludeId);
            }
            if (!$query->exists()) {
                break;
            }
            $slug = $baseSlug . '-' . $counter;
            $counter++;
        }
        return $slug;
    }

    private function generateUniqueEventSlug($name, $userId, $excludeId = null)
    {
        $baseSlug = Str::slug($name);
        $slug = $baseSlug;
        $counter = 1;
        while (true) {
            $query = Event::where('slug', $slug);
            if ($excludeId) {
                $query->where('id', '!=', $excludeId);
            }
            if (!$query->exists()) {
                break;
            }
            $slug = $baseSlug . '-' . $counter;
            $counter++;
        }
        return $slug;
    }

    private function sanitizeHtml($html)
    {
        $html = preg_replace('/<script\b[^<]*(?:(?!<\/script>)<[^<]*)*<\/script>/mi', '', $html);
        $html = preg_replace('/<style\b[^<]*(?:(?!<\/style>)<[^<]*)*<\/style>/mi', '', $html);
        $html = preg_replace('/\s*on\w+\s*=\s*["\'][^"\']*["\']/i', '', $html);
        $html = preg_replace('/href\s*=\s*["\']javascript:[^"\']*["\']/i', '', $html);
        return $html;
    }

    /**
     * Convert Markdown to HTML for display (if needed elsewhere)
     */
    public function markdownToHtml($markdown)
    {
        if (empty($markdown)) {
            return '';
        }
        return $this->markdownConverter->convert($markdown)->getContent();
    }

    private function processCategoriesForView($type = 'startup')
    {
        $categories = array();
        $parentCategories = array();
        $categoryDescriptions = array();
        if ($type == 'service') {
            $rawCategories = ServiceCategory::orderBy('ord', 'asc')->orderBy('name', 'asc')->get()->keyBy('id');
        } elseif ($type == 'event') {
            $rawCategories = EventCategory::orderBy('ord', 'asc')->orderBy('name', 'asc')->get()->keyBy('id');
        } elseif ($type == 'business') {
            $rawCategories = BusinessCategory::orderBy('ord', 'asc')->orderBy('name', 'asc')->get()->keyBy('id');
        } else {
            $rawCategories = StartupCategory::orderBy('ord', 'asc')->orderBy('name', 'asc')->get()->keyBy('id');
        }

        // Process categories and build arrays
        foreach ($rawCategories as $category) {
            if ($category->parent_id == 0) {
                // Parent categories
                if (LaravelLocalization::getCurrentLocale() == 'en') {
                    $parentCategories[$category->id] = $category->name;
                } else {
                    $translations = json_decode($category->name_translations, true);
                    $parentCategories[$category->id] = $translations[LaravelLocalization::getCurrentLocale()] ?? $category->name;
                }
            } else {
                // Subcategories
                if (LaravelLocalization::getCurrentLocale() == 'en') {
                    $categories[$category->parent_id][$category->id] = $category->name;
                    $categoryDescriptions[$category->id] = $category->scom;
                } else {
                    $translations = json_decode($category->name_translations, true);
                    $categories[$category->parent_id][$category->id] = $translations[LaravelLocalization::getCurrentLocale()] ?? $category->name;
                    $translations = json_decode($category->scom_translations, true);
                    $categoryDescriptions[$category->id] = $translations[LaravelLocalization::getCurrentLocale()] ?? $category->scom;
                }
            }
        }

        // Sort parent categories using ord field and alphabetically
        $parentCategoriesWithOrd = [];
        foreach ($parentCategories as $categoryId => $categoryName) {
            $category = $rawCategories[$categoryId];
            $parentCategoriesWithOrd[$categoryId] = [
                'name' => $categoryName,
                'ord' => $category->ord
            ];
        }

        // Sort: first by ord (0 before 1), then alphabetically by name
        uasort($parentCategoriesWithOrd, function($a, $b) {
            if ($a['ord'] != $b['ord']) {
                return $a['ord'] - $b['ord']; // ord=0 comes before ord=1
            }
            return strcasecmp($a['name'], $b['name']); // alphabetical for same ord
        });

        // Rebuild parentCategories in sorted order
        $sortedParentCategories = [];
        foreach ($parentCategoriesWithOrd as $categoryId => $data) {
            $sortedParentCategories[$categoryId] = $data['name'];
        }
        $parentCategories = $sortedParentCategories;

        // Sort subcategories using ord field and alphabetically
        $sortedCategories = array();
        foreach ($categories as $parentId => $subcategories) {
            $subcategoriesWithOrd = [];

            foreach ($subcategories as $categoryId => $categoryName) {
                $category = $rawCategories[$categoryId];
                $subcategoriesWithOrd[$categoryId] = [
                    'name' => $categoryName,
                    'ord' => $category->ord
                ];
            }

            // Sort: first by ord (0 before 1), then alphabetically by name
            uasort($subcategoriesWithOrd, function($a, $b) {
                if ($a['ord'] != $b['ord']) {
                    return $a['ord'] - $b['ord']; // ord=0 comes before ord=1
                }
                return strcasecmp($a['name'], $b['name']); // alphabetical for same ord
            });

            // Rebuild subcategories in sorted order
            $sortedSubcategories = [];
            foreach ($subcategoriesWithOrd as $categoryId => $data) {
                $sortedSubcategories[$categoryId] = $data['name'];
            }
            $sortedCategories[$parentId] = $sortedSubcategories;
        }

        // Prepare formatted categories for JavaScript with proper sorting
        $formattedCategories = [];

        // Process categories in the same order as parentCategories to maintain proper sorting
        foreach ($parentCategories as $parentId => $parentName) {
            if (isset($sortedCategories[$parentId])) {
                foreach ($sortedCategories[$parentId] as $categoryId => $categoryName) {
                    $formattedCategories[] = [
                        'code' => (string)$categoryId,
                        'name' => $categoryName,
                        'group' => $parentName,
                        'description' => $categoryDescriptions[$categoryId] ?? '',
                        'ord' => $rawCategories[$categoryId]->ord
                    ];
                }
            }
        }

        return [
            'categories' => $sortedCategories,
            'parentCategories' => $parentCategories,
            'categoryDescriptions' => $categoryDescriptions,
            'rawCategories' => $rawCategories,
            'formattedCategories' => $formattedCategories
        ];
    }

    public function index()
    {
        $meta = $this->getMeta();
        $cities = City::where('country_id', 55)->orderBy('population', 'desc')->orderBy('name', 'asc')->limit(7)->get()->keyBy('id');
        $members = UserProfile::orderBy('created_at', 'desc')->limit(10)->get()->keyBy('user_id');
        return view('app.index', [
            'meta' => $meta,
            'cities' => $cities,
            'members' => $members
        ]);
    }

    public function profile()
    {
        $meta = $this->getMeta();
        $countries = Country::where('active', 1)->orderBy('name', 'asc')->get();
        $about_html = null;
        if (!empty(Auth::user()->profile->about)) {
            $about_html = $this->markdownConverter->convert(Auth::user()->profile->about)->getContent();
        }
        return view('app.profile', [
            'meta' => $meta,
            'about_html' => $about_html,
            'countries' => $countries
        ]);
    }

    public function community()
    {
        $meta = $this->getMeta();
        $members = UserProfile::orderBy('created_at', 'desc')->paginate(20);
        return view('app.community', [
            'meta' => $meta,
            'members' => $members
        ]);
    }

    public function user($nickname)
    {
        $meta = $this->getMeta();
        $user = User::where('name', $nickname)->firstOrFail();
        if (!empty($user->profile->about)) {
            $user->about_html = $this->markdownConverter->convert($user->profile->about)->getContent();
        } else {
            $user->about_html = '';
        }
        return view('app.user', [
            'meta' => $meta,
            'user' => $user
        ]);
    }

    public function startups()
    {
        $meta = $this->getMeta();
        $startups = Startup::where('user_id', Auth::user()->id)->orderBy('created_at', 'desc')->get()->keyBy('id');
        $startupCategories = StartupCategory::orderBy('ord', 'asc')->get()->keyBy('id');
        foreach ($startups as $key => $startup) {
            if (!empty($startup->description)) {
                $startups[$key]->description_html = $this->markdownConverter->convert($startup->description)->getContent();
            }
        }
        return view('app.startups', [
            'meta' => $meta,
            'startups' => $startups,
            'startupCategories' => $startupCategories
        ]);
    }

    public function startupsCreate()
    {
        $meta = $this->getMeta();
        $categoryData = $this->processCategoriesForView();

        return view('app.startup', array_merge([
            'meta' => $meta
        ], $categoryData));
    }

    public function startupsEdit($id)
    {
        $startup = Startup::findOrFail($id);
        if (empty($startup->id) || $startup->user_id != Auth::user()->id) {
            return redirect()->route('app::index')->with('error', __('Startup not found or access denied'));
        }

        if (!empty($startup->description)) {
            $startup->description_html = $this->markdownConverter->convert($startup->description)->getContent();
        }

        $meta = $this->getMeta();
        $categoryData = $this->processCategoriesForView();

        return view('app.startup', array_merge([
            'meta' => $meta,
            'startup' => $startup
        ], $categoryData));
    }

    public function startupsDelete($id)
    {
        $meta = $this->getMeta();
        return view('app.startups', [
            'meta' => $meta
        ]);
    }

    public function startupsSave(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required|string|max:191',
                'description' => 'nullable|string|max:4000',
                'categories' => 'array|max:5', // Max 5 categories
                'categories.*' => 'string',
                'founding_year' => 'nullable|integer|min:1900|max:' . date('Y'),
                'is_fundraising' => 'boolean',
                'is_online' => 'required|boolean',
                'location' => 'nullable|required_if:is_online,0|string|max:191',
                'link' => 'nullable|required_if:is_online,1|url|max:191',
                'lat' => 'nullable|required_if:is_online,0|numeric|between:-90,90',
                'lon' => 'nullable|required_if:is_online,0|numeric|between:-180,180',
                'active' => 'boolean'
            ]);
            if (empty($request->id)) {
                $startup = new Startup();
                $startup->user_id = Auth::user()->id;
            } else {
                $startup = Startup::findOrFail($request->id);
                if ($startup->user_id != Auth::user()->id) {
                    return redirect()->route('app::startups')->withErrors(__('Startup not found or access denied'));
                }
            }
            $startup->name = $request->name ?? null;
            if (!empty($request->description)) {
                if ($this->isMarkdown($request->description)) {
                    $startup->description = $request->description;
                } else {
                    $cleanHtml = $this->sanitizeHtml($request->description);
                    $startup->description = $this->htmlConverter->convert($cleanHtml);
                }
            } else {
                $startup->description = null;
            }
            $startup->categories = (!empty($request->categories) ? '[' . implode('][', $request->categories) . ']' : null);
            if (!empty($startup->categories)) {
                $categoryIDs = explode('][', trim($startup->categories, '[]'));
                foreach ($categoryIDs as $categoryID) {
                    $category = StartupCategory::find($categoryID);
                    if ($category && $category->parent_id != 0) {
                        $parentID = $category->parent_id;
                        if (!in_array($parentID, $categoryIDs)) {
                            $categoryIDs[] = $parentID;
                        }
                    }
                }
                sort($categoryIDs);
                $startup->categories = '[' . implode('][', $categoryIDs) . ']';
            }
            $startup->founding_year = $request->founding_year ?? null;
            $startup->is_fundraising = $request->boolean('is_fundraising');
            $startup->lat = $request->is_online ? 0 : ($request->lat ?? 0);
            $startup->lon = $request->is_online ? 0 : ($request->lon ?? 0);
            $startup->is_online = $request->is_online ? 1 : 0;
            $startup->location = $request->is_online ? null : $request->location;
            $startup->link = $request->is_online ? $request->link : null;
            $startup->active = $request->boolean('active');
            if (!$startup->slug || $startup->isDirty('name')) {
                $startup->slug = $this->generateUniqueStartupSlug($request->input('name'), Auth::user()->id, $startup->id ?? null);
            }
            if (!empty($startup->lat) && !empty($startup->lon)) {
                $startup->country_id = 55;
                $nearestCity = City::select('id')->selectRaw('(6371 * acos(cos(radians(?)) * cos(radians(lat)) * cos(radians(lon) - radians(?)) + sin(radians(?)) * sin(radians(lat)))) as distance', [$startup->lat, $startup->lon, $startup->lat])->where('country_id', 55)->orderBy('distance', 'asc')->first();
                $startup->city_id = $nearestCity ? $nearestCity->id : null;
            } else {
                $startup->city_id = 0;
                $startup->country_id = 55;
            }
            $startup->save();
            return redirect()->route('app::startups::edit', ['id' => $startup->id])->with(['success' => __('Startup saved')]);
        } catch (\Exception $e) {
            return redirect()->route('app::startups::edit', ['id' => $request->id ?? null])->with(['error' => __('Failed to save startup') . ': ' . $e->getMessage()]);
        }
    }

    public function startupsImage(Request $request)
    {
        $request->validate([
            'avatar' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:20480'
        ]);

        if (empty($request->startupID)) {
            $startup = new Startup();
            $startup->user_id = Auth::user()->id;
            $startup->save();
        } else {
            $startup = Startup::find($request->startupID);
            if (empty($startup->id) || $startup->user_id != Auth::user()->id) {
                return response()->json([
                    'success' => false,
                    'message' => __('Startup not found or access denied')
                ], 404);
            }
        }

        try {
            if ($startup->img) {
                Storage::disk('do')->delete([
                    'sfccy/startups/' . substr($startup->img, 0, 1) . '/' . substr($startup->img, 0, 2) . '/' . substr($startup->img, 0, 3) . '/' . $startup->img,
                    'sfccy/startups/' . substr($startup->img, 0, 1) . '/' . substr($startup->img, 0, 2) . '/' . substr($startup->img, 0, 3) . '/th_' . $startup->img
                ]);
                $startup->img = null;
            }
            $file = $request->file('avatar');
            $name = Str::random(16) . '.webp';
            $manager = new ImageManager(new Driver());
            $mainImage = $manager->read($file)->cover(300, 300)->toWebp(85);
            $thumbnail = $manager->read($file)->cover(100, 100)->toWebp(80);
            Storage::disk('do')->put('sfccy/startups/' . substr($name, 0, 1) . '/' . substr($name, 0, 2) . '/' . substr($name, 0, 3) . '/' . $name, $mainImage, 'public');
            Storage::disk('do')->put('sfccy/startups/' . substr($name, 0, 1) . '/' . substr($name, 0, 2) . '/' . substr($name, 0, 3) . '/th_' . $name, $thumbnail, 'public');
            $startup->img = $name;
            $startup->save();
            return response()->json([
                'success' => true,
                'avatar_url' => 'https://fvn.ams3.cdn.digitaloceanspaces.com/sfccy/startups/' . substr($startup->img, 0, 1) . '/' . substr($startup->img, 0, 2) . '/' . substr($startup->img, 0, 3) . '/' . $startup->img,
                'thumbnail_url' => 'https://fvn.ams3.cdn.digitaloceanspaces.com/sfccy/startups/' . substr($startup->img, 0, 1) . '/' . substr($startup->img, 0, 2) . '/' . substr($startup->img, 0, 3) . '/th_' . $startup->img,
                'message' => __('Logo updated successfully!'),
                'id' => $startup->id
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => __('Failed to process image') . ': ' . $e->getMessage()
            ], 500);
        }
    }

    public function services()
    {
        $meta = $this->getMeta();
        $services = Service::where('user_id', Auth::user()->id)->orderBy('created_at', 'desc')->get()->keyBy('id');
        $serviceCategories = ServiceCategory::orderBy('ord', 'asc')->get()->keyBy('id');
        foreach ($services as $key => $service) {
            if (!empty($service->description)) {
                $services[$key]->description_html = $this->markdownConverter->convert($service->description)->getContent();
            }
        }
        return view('app.services', [
            'meta' => $meta,
            'services' => $services,
            'serviceCategories' => $serviceCategories
        ]);
    }

    public function servicesCreate()
    {
        $meta = $this->getMeta();
        $categoryData = $this->processCategoriesForView('service');

        return view('app.service', array_merge([
            'meta' => $meta
        ], $categoryData));
    }

    public function servicesEdit($id)
    {
        $service = Service::findOrFail($id);
        if (empty($service->id) || $service->user_id != Auth::user()->id) {
            return redirect()->route('app::index')->with('error', __('Service not found or access denied'));
        }

        if (!empty($service->description)) {
            $service->description_html = $this->markdownConverter->convert($service->description)->getContent();
        }

        $meta = $this->getMeta();
        $categoryData = $this->processCategoriesForView('service');

        return view('app.service', array_merge([
            'meta' => $meta,
            'service' => $service
        ], $categoryData));
    }

    public function servicesDelete($id)
    {
        $meta = $this->getMeta();
        return view('app.services', [
            'meta' => $meta
        ]);
    }

    public function servicesSave(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required|string|max:191',
                'description' => 'nullable|string|max:4000',
                'categories' => 'array|max:5', // Max 5 categories
                'categories.*' => 'string',
                'active' => 'boolean'
            ]);
            if (empty($request->id)) {
                $service = new Service();
                $service->user_id = Auth::user()->id;
            } else {
                $service = Startup::findOrFail($request->id);
                if ($service->user_id != Auth::user()->id) {
                    return redirect()->route('app::startups')->withErrors(__('Service not found or access denied'));
                }
            }
            $service->name = $request->name ?? null;
            if (!empty($request->description)) {
                if ($this->isMarkdown($request->description)) {
                    $service->description = $request->description;
                } else {
                    $cleanHtml = $this->sanitizeHtml($request->description);
                    $service->description = $this->htmlConverter->convert($cleanHtml);
                }
            } else {
                $service->description = null;
            }
            $service->categories = (!empty($request->categories) ? '[' . implode('][', $request->categories) . ']' : null);
            $service->active = $request->boolean('active');
            if (!$service->slug || $service->isDirty('name')) {
                $service->slug = $this->generateUniqueServiceSlug($request->input('name'), Auth::user()->id, $service->id ?? null);
            }
            $service->save();
            return redirect()->route('app::services::edit', ['id' => $service->id])->with(['success' => __('Service saved')]);
        } catch (\Exception $e) {
            return redirect()->route('app::services::edit', ['id' => $service->id ?? null])->with(['error' => __('Failed to save service') . ': ' . $e->getMessage()]);
        }
    }

    public function servicesImage(Request $request)
    {
        $request->validate([
            'avatar' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:20480'
        ]);

        if (empty($request->serviceID)) {
            $service = new Service();
            $service->user_id = Auth::user()->id;
            $service->save();
        } else {
            $service = Service::find($request->serviceID);
            if (empty($service->id) || $service->user_id != Auth::user()->id) {
                return response()->json([
                    'success' => false,
                    'message' => __('Service not found or access denied')
                ], 404);
            }
        }

        try {
            if ($service->img) {
                Storage::disk('do')->delete([
                    'sfccy/services/' . substr($service->img, 0, 1) . '/' . substr($service->img, 0, 2) . '/' . substr($service->img, 0, 3) . '/' . $service->img,
                    'sfccy/services/' . substr($service->img, 0, 1) . '/' . substr($service->img, 0, 2) . '/' . substr($service->img, 0, 3) . '/th_' . $service->img
                ]);
                $service->img = null;
            }
            $file = $request->file('avatar');
            $name = Str::random(16) . '.webp';
            $manager = new ImageManager(new Driver());
            $mainImage = $manager->read($file)->cover(300, 300)->toWebp(85);
            $thumbnail = $manager->read($file)->cover(100, 100)->toWebp(80);
            Storage::disk('do')->put('sfccy/services/' . substr($name, 0, 1) . '/' . substr($name, 0, 2) . '/' . substr($name, 0, 3) . '/' . $name, $mainImage, 'public');
            Storage::disk('do')->put('sfccy/services/' . substr($name, 0, 1) . '/' . substr($name, 0, 2) . '/' . substr($name, 0, 3) . '/th_' . $name, $thumbnail, 'public');
            $service->img = $name;
            $service->save();
            return response()->json([
                'success' => true,
                'avatar_url' => 'https://fvn.ams3.cdn.digitaloceanspaces.com/sfccy/services/' . substr($service->img, 0, 1) . '/' . substr($service->img, 0, 2) . '/' . substr($service->img, 0, 3) . '/' . $service->img,
                'thumbnail_url' => 'https://fvn.ams3.cdn.digitaloceanspaces.com/sfccy/services/' . substr($service->img, 0, 1) . '/' . substr($service->img, 0, 2) . '/' . substr($service->img, 0, 3) . '/th_' . $service->img,
                'message' => __('Image updated successfully!'),
                'id' => $service->id
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => __('Failed to process image') . ': ' . $e->getMessage()
            ], 500);
        }
    }

    public function events()
    {
        $meta = $this->getMeta();
        $events = Event::where('user_id', Auth::user()->id)->orderBy('created_at', 'desc')->get()->keyBy('id');
        $eventCategories = EventCategory::orderBy('ord', 'asc')->get()->keyBy('id');
        foreach ($events as $key => $event) {
            if (!empty($event->description)) {
                $events[$key]->description_html = $this->markdownConverter->convert($event->description)->getContent();
            }
        }
        return view('app.events', [
            'meta' => $meta,
            'events' => $events,
            'eventCategories' => $eventCategories
        ]);
    }

    public function eventsCreate()
    {
        $meta = $this->getMeta();
        $categoryData = $this->processCategoriesForView('event');

        return view('app.event', array_merge([
            'meta' => $meta
        ], $categoryData));
    }

    public function eventsEdit($id)
    {
        $event = Event::findOrFail($id);
        if (empty($event->id) || $event->user_id != Auth::user()->id) {
            return redirect()->route('app::index')->with('error', __('Event not found or access denied'));
        }

        if (!empty($event->description)) {
            $event->description_html = $this->markdownConverter->convert($event->description)->getContent();
        }

        $meta = $this->getMeta();
        $categoryData = $this->processCategoriesForView('event');

        return view('app.event', array_merge([
            'meta' => $meta,
            'event' => $event
        ], $categoryData));
    }

    public function eventsDelete($id)
    {
        $meta = $this->getMeta();
        return view('app.events', [
            'meta' => $meta
        ]);
    }

    public function eventsSave(Request $request)
    {
        try {
            $validated = $request->validate([
                'name' => 'required|string|max:191',
                'categories' => 'array|max:5',
                'categories.*' => 'string',
                'description' => 'nullable|string|max:4000',
                'img' => 'nullable|string|max:191',
                'start_date' => 'required|date',
                'start_time' => 'required|date_format:H:i',
                'end_date' => 'required|date|after_or_equal:start_date',
                'end_time' => 'required|date_format:H:i',
                'timezone' => 'required|string|max:50',
                'is_online' => 'required|boolean',
                'location' => 'nullable|required_if:is_online,0|string|max:191',
                'link' => 'nullable|required_if:is_online,1|url|max:191',
                'lat' => 'nullable|required_if:is_online,0|numeric|between:-90,90',
                'lon' => 'nullable|required_if:is_online,0|numeric|between:-180,180',
                'price_amount' => 'nullable|numeric|min:0|max:99999999.99',
                'is_free_event' => 'required|boolean',
                'currency' => 'nullable|string|max:3',
                'languages' => 'array|max:3',
                'languages.*' => 'string|size:2',
                'active' => 'boolean'
            ]);
            if (empty($request->id)) {
                $event = new Event();
                $event->user_id = Auth::user()->id;
            } else {
                $event = Event::findOrFail($request->id);
                if ($event->user_id != Auth::user()->id) {
                    return redirect()->route('app::events')->withErrors(__('Event not found or access denied'));
                }
            }

            $userTimezone = $validated['timezone'];
            $startDateTime = date('Y-m-d H:i:s', strtotime($validated['start_date'] . ' ' . $validated['start_time']));
            $endDateTime = date('Y-m-d H:i:s', strtotime($validated['end_date'] . ' ' . $validated['end_time']));
            if (strtotime($endDateTime) <= strtotime($startDateTime)) {
                return back()->withErrors(['end_time' => __('End time must be after start time.')]);
            }
            $event->start_date = $startDateTime;
            $event->end_date = $endDateTime;
            $event->timezone = $userTimezone;
            $event->name = $request->name ?? null;
            if (!empty($request->description)) {
                if ($this->isMarkdown($request->description)) {
                    $event->description = $request->description;
                } else {
                    $cleanHtml = $this->sanitizeHtml($request->description);
                    $event->description = $this->htmlConverter->convert($cleanHtml);
                }
            } else {
                $event->description = null;
            }
            $event->categories = (!empty($request->categories) ? '[' . implode('][', $request->categories) . ']' : null);
            $event->languages = (!empty($validated['languages']) ? '[' . implode('][', $validated['languages']) . ']' : null);
            // Add parent categories automatically
            if (!empty($event->categories)) {
                $categoryIDs = explode('][', trim($event->categories, '[]'));
                foreach ($categoryIDs as $categoryID) {
                    $category = EventCategory::find($categoryID);
                    if ($category && $category->parent_id != 0) {
                        $parentID = $category->parent_id;
                        if (!in_array($parentID, $categoryIDs)) {
                            $categoryIDs[] = $parentID;
                        }
                    }
                }
                sort($categoryIDs);
                $event->categories = '[' . implode('][', $categoryIDs) . ']';
            }
            $event->lat = $validated['is_online'] ? 0 : ($validated['lat'] ?? 0);
            $event->lon = $validated['is_online'] ? 0 : ($validated['lon'] ?? 0);
            $event->is_online = $validated['is_online'] ? 1 : 0;
            $event->location = $validated['is_online'] ? null : $validated['location'];
            $event->link = $validated['is_online'] ? $validated['link'] : null;
            $event->is_free = $validated['is_free_event'] ? 1 : 0;
            if ($event->is_free) {
                $event->price = 0.00;
                $event->currency = 'EUR';
            } else {
                $event->price = $validated['price_amount'] ?? 0.00;
                $event->currency = 'EUR'; // Always EUR for Cyprus
            }
            $event->active = $request->boolean('active');
            if (!$event->slug || $event->isDirty('name')) {
                $event->slug = $this->generateUniqueEventSlug($request->input('name'), Auth::user()->id, $event->id ?? null);
            }
            if (!empty($event->lat) && !empty($event->lon)) {
                $event->country_id = 55;
                $nearestCity = City::select('id')->selectRaw('(6371 * acos(cos(radians(?)) * cos(radians(lat)) * cos(radians(lon) - radians(?)) + sin(radians(?)) * sin(radians(lat)))) as distance', [$event->lat, $event->lon, $event->lat])->where('country_id', 55)->orderBy('distance', 'asc')->first();
                $event->city_id = $nearestCity ? $nearestCity->id : null;
            } else {
                $event->city_id = 0;
                $event->country_id = 55;
            }
            $event->save();
            return redirect()->route('app::events::edit', ['id' => $event->id])->with(['success' => __('Event saved')]);
        } catch (\Exception $e) {
            return redirect()->route('app::events::edit', ['id' => $event->id ?? null])->with(['error' => __('Failed to save event') . ': ' . $e->getMessage()]);
        }
    }

    public function eventsImage(Request $request)
    {
        $request->validate([
            'avatar' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:20480'
        ]);

        if (empty($request->eventID)) {
            $event = new Event();
            $event->user_id = Auth::user()->id;
            $event->save();
        } else {
            $event = Event::find($request->eventID);
            if (empty($event->id) || $event->user_id != Auth::user()->id) {
                return response()->json([
                    'success' => false,
                    'message' => __('Event not found or access denied')
                ], 404);
            }
        }

        try {
            if ($event->img) {
                Storage::disk('do')->delete([
                    'sfccy/events/' . substr($event->img, 0, 1) . '/' . substr($event->img, 0, 2) . '/' . substr($event->img, 0, 3) . '/' . $event->img,
                    'sfccy/events/' . substr($event->img, 0, 1) . '/' . substr($event->img, 0, 2) . '/' . substr($event->img, 0, 3) . '/th_' . $event->img
                ]);
                $event->img = null;
            }
            $file = $request->file('avatar');
            $name = Str::random(16) . '.webp';
            $manager = new ImageManager(new Driver());
            $mainImage = $manager->read($file)->cover(300, 300)->toWebp(85);
            $thumbnail = $manager->read($file)->cover(100, 100)->toWebp(80);
            Storage::disk('do')->put('sfccy/events/' . substr($name, 0, 1) . '/' . substr($name, 0, 2) . '/' . substr($name, 0, 3) . '/' . $name, $mainImage, 'public');
            Storage::disk('do')->put('sfccy/events/' . substr($name, 0, 1) . '/' . substr($name, 0, 2) . '/' . substr($name, 0, 3) . '/th_' . $name, $thumbnail, 'public');
            $event->img = $name;
            $event->save();
            return response()->json([
                'success' => true,
                'avatar_url' => 'https://fvn.ams3.cdn.digitaloceanspaces.com/sfccy/events/' . substr($event->img, 0, 1) . '/' . substr($event->img, 0, 2) . '/' . substr($event->img, 0, 3) . '/' . $event->img,
                'thumbnail_url' => 'https://fvn.ams3.cdn.digitaloceanspaces.com/sfccy/events/' . substr($event->img, 0, 1) . '/' . substr($event->img, 0, 2) . '/' . substr($event->img, 0, 3) . '/th_' . $event->img,
                'message' => __('Image updated successfully!'),
                'id' => $event->id
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => __('Failed to process image') . ': ' . $e->getMessage()
            ], 500);
        }
    }

    public function business()
    {
        $meta = $this->getMeta();
        $businesses = Business::where('user_id', Auth::user()->id)->orderBy('created_at', 'desc')->get()->keyBy('id');
        $businessCategories = BusinessCategory::orderBy('ord', 'asc')->get()->keyBy('id');
        foreach ($businesses as $key => $business) {
            if (!empty($business->description)) {
                $businesses[$key]->description_html = $this->markdownConverter->convert($business->description)->getContent();
            }
        }
        return view('app.businesses', [
            'meta' => $meta,
            'businesses' => $businesses,
            'businessCategories' => $businessCategories
        ]);
    }

    public function businessCreate()
    {
        $meta = $this->getMeta();
        $categoryData = $this->processCategoriesForView('business');

        return view('app.business', array_merge([
            'meta' => $meta
        ], $categoryData));
    }

    public function businessEdit($id)
    {
        $business = Business::findOrFail($id);
        if (empty($business->id) || $business->user_id != Auth::user()->id) {
            return redirect()->route('app::index')->with('error', __('Business not found or access denied'));
        }

        if (!empty($business->description)) {
            $business->description_html = $this->markdownConverter->convert($business->description)->getContent();
        }

        $meta = $this->getMeta();
        $categoryData = $this->processCategoriesForView('business');

        return view('app.business', array_merge([
            'meta' => $meta,
            'business' => $business
        ], $categoryData));
    }

    public function businessDelete($id)
    {
        $meta = $this->getMeta();
        return view('app.events', [
            'meta' => $meta
        ]);
    }

    public function businessSave(Request $request)
    {
        try {
            $validated = $request->validate([
                'name' => 'required|string|max:191',
                'categories' => 'array|max:5',
                'categories.*' => 'string',
                'description' => 'nullable|string|max:4000',
                'img' => 'nullable|string|max:191',
                'is_online' => 'required|boolean',
                'location' => 'nullable|required_if:is_online,0|string|max:191',
                'link' => 'nullable|required_if:is_online,1|url|max:191',
                'lat' => 'nullable|required_if:is_online,0|numeric|between:-90,90',
                'lon' => 'nullable|required_if:is_online,0|numeric|between:-180,180',
                'languages' => 'array|max:10', // Added language validation - max 10
                'languages.*' => 'string|size:2', // Each language code should be 2 characters
                'active' => 'boolean'
            ]);
            if (empty($request->id)) {
                $business = new Business();
                $business->user_id = Auth::user()->id;
            } else {
                $business = Business::findOrFail($request->id);
                if ($business->user_id != Auth::user()->id) {
                    return redirect()->route('app::business')->withErrors(__('Business not found or access denied'));
                }
            }
            $business->name = $request->name ?? null;
            if (!empty($request->description)) {
                if ($this->isMarkdown($request->description)) {
                    $business->description = $request->description;
                } else {
                    $cleanHtml = $this->sanitizeHtml($request->description);
                    $business->description = $this->htmlConverter->convert($cleanHtml);
                }
            } else {
                $business->description = null;
            }
            $business->languages = (!empty($validated['languages']) ? '[' . implode('][', $validated['languages']) . ']' : null);
            $business->categories = (!empty($request->categories) ? '[' . implode('][', $request->categories) . ']' : null);
            // Add parent categories automatically
            if (!empty($event->categories)) {
                $categoryIDs = explode('][', trim($event->categories, '[]'));
                foreach ($categoryIDs as $categoryID) {
                    $category = BusinessCategory::find($categoryID);
                    if ($category && $category->parent_id != 0) {
                        $parentID = $category->parent_id;
                        if (!in_array($parentID, $categoryIDs)) {
                            $categoryIDs[] = $parentID;
                        }
                    }
                }
                sort($categoryIDs);
                $event->categories = '[' . implode('][', $categoryIDs) . ']';
            }
            $business->lat = $validated['is_online'] ? 0 : ($validated['lat'] ?? 0);
            $business->lon = $validated['is_online'] ? 0 : ($validated['lon'] ?? 0);
            $business->is_online = $validated['is_online'] ? 1 : 0;
            $business->location = $validated['is_online'] ? null : $validated['location'];
            $business->link = $validated['is_online'] ? $validated['link'] : null;
            $business->active = $request->boolean('active');
            if (!$business->slug || $business->isDirty('name')) {
                $business->slug = $this->generateUniqueEventSlug($request->input('name'), Auth::user()->id, $business->id ?? null);
            }
            $business->save();
            return redirect()->route('app::business::edit', ['id' => $business->id])->with(['success' => __('Business saved')]);
        } catch (\Exception $e) {
            return redirect()->route('app::business::edit', ['id' => $business->id ?? null])->with(['error' => __('Failed to save business') . ': ' . $e->getMessage()]);
        }
    }

    public function businessImage(Request $request)
    {
        $request->validate([
            'avatar' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:20480'
        ]);

        if (empty($request->businessID)) {
            $business = new Business();
            $business->user_id = Auth::user()->id;
            $business->save();
        } else {
            $business = Business::find($request->businessID);
            if (empty($business->id) || $business->user_id != Auth::user()->id) {
                return response()->json([
                    'success' => false,
                    'message' => __('Business not found or access denied')
                ], 404);
            }
        }

        try {
            if ($business->img) {
                Storage::disk('do')->delete([
                    'sfccy/business/' . substr($business->img, 0, 1) . '/' . substr($business->img, 0, 2) . '/' . substr($business->img, 0, 3) . '/' . $business->img,
                    'sfccy/business/' . substr($business->img, 0, 1) . '/' . substr($business->img, 0, 2) . '/' . substr($business->img, 0, 3) . '/th_' . $business->img
                ]);
                $business->img = null;
            }
            $file = $request->file('avatar');
            $name = Str::random(16) . '.webp';
            $manager = new ImageManager(new Driver());
            $mainImage = $manager->read($file)->cover(300, 300)->toWebp(85);
            $thumbnail = $manager->read($file)->cover(100, 100)->toWebp(80);
            Storage::disk('do')->put('sfccy/business/' . substr($name, 0, 1) . '/' . substr($name, 0, 2) . '/' . substr($name, 0, 3) . '/' . $name, $mainImage, 'public');
            Storage::disk('do')->put('sfccy/business/' . substr($name, 0, 1) . '/' . substr($name, 0, 2) . '/' . substr($name, 0, 3) . '/th_' . $name, $thumbnail, 'public');
            $business->img = $name;
            $business->save();
            return response()->json([
                'success' => true,
                'avatar_url' => 'https://fvn.ams3.cdn.digitaloceanspaces.com/sfccy/business/' . substr($business->img, 0, 1) . '/' . substr($business->img, 0, 2) . '/' . substr($business->img, 0, 3) . '/' . $business->img,
                'thumbnail_url' => 'https://fvn.ams3.cdn.digitaloceanspaces.com/sfccy/business/' . substr($business->img, 0, 1) . '/' . substr($business->img, 0, 2) . '/' . substr($business->img, 0, 3) . '/th_' . $business->img,
                'message' => __('Image updated successfully!'),
                'id' => $business->id
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => __('Failed to process image') . ': ' . $e->getMessage()
            ], 500);
        }
    }
}
