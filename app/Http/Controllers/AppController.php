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
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class AppController extends Controller
{
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

    private function generateUniqueStartupSlug($name, $userId, $excludeId = null)
    {
        $baseSlug = Str::slug($name);
        $slug = $baseSlug;
        $counter = 1;
        while (true) {
            $query = Startup::where('user_id', $userId)->where('slug', $slug);
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

    private function processCategoriesForView()
    {
        $categories = array();
        $parentCategories = array();
        $categoryDescriptions = array();
        $rawCategories = StartupCategory::orderBy('ord', 'asc')->orderBy('name', 'asc')->get()->keyBy('id');

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
        return view('app.index', [
            'meta' => $meta
        ]);
    }

    public function profile()
    {
        $meta = $this->getMeta();
        $countries = Country::where('active', 1)->orderBy('name', 'asc')->get();
        return view('app.profile', [
            'meta' => $meta,
            'countries' => $countries
        ]);
    }

    public function startups()
    {
        $meta = $this->getMeta();
        $startups = Startup::where('user_id', Auth::user()->id)->orderBy('created_at', 'desc')->get();
        $startupCategories = StartupCategory::orderBy('ord', 'asc')->get()->keyBy('id');
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
                'description' => 'nullable|string',
                'categories' => 'array|max:5', // Max 5 categories
                'categories.*' => 'string',
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
            $startup->description = $request->description ?? null;
            $startup->categories = (!empty($request->categories) ? '[' . implode('][', $request->categories) . ']' : null);
            $startup->active = $request->boolean('active');
            if (!$startup->slug || $startup->isDirty('name')) {
                $startup->slug = $this->generateUniqueStartupSlug($request->input('name'), Auth::user()->id, $startup->id ?? null);
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
}
