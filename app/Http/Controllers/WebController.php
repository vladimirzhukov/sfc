<?php

namespace App\Http\Controllers;

use App\Models\Business;
use App\Models\BusinessCategory;
use App\Models\BusinessMeta;
use App\Models\Event;
use App\Models\EventMeta;
use App\Models\Service;
use App\Models\ServiceCategory;
use App\Models\ServiceMeta;
use App\Models\Startup;
use App\Models\StartupMeta;
use App\Models\User;
use App\Models\UserProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Meta;
use App\Models\PageContent;
use App\Models\City;
use App\Models\WorkingAfternoon;
use App\Models\EventCategory;
use App\Models\StartupCategory;
use Illuminate\Support\Str;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class WebController extends Controller
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

    public function index()
    {
        $meta = $this->getMeta();
        $cities = City::where('country_id', 55)->orderBy('population', 'desc')->orderBy('name', 'asc')->limit(7)->get()->keyBy('id');
        $afternoons = WorkingAfternoon::where('country_id', 55)->get();
        return view('index', [
            'meta' => $meta,
            'afternoons' => $afternoons,
            'cities' => $cities
        ]);
    }

    public function wa()
    {
        $meta = $this->getMeta();
        $cities = City::where('country_id', 55)->orderBy('population', 'desc')->orderBy('name', 'asc')->limit(7)->get()->keyBy('id');
        $afternoons = WorkingAfternoon::where('country_id', 55)->get();
        return view('wa', [
            'meta' => $meta,
            'afternoons' => $afternoons,
            'cities' => $cities
        ]);
    }

    public function terms()
    {
        $meta = $this->getMeta();
        $cities = City::where('country_id', 55)->orderBy('population', 'desc')->orderBy('name', 'asc')->limit(7)->get()->keyBy('id');
        $afternoons = WorkingAfternoon::where('country_id', 55)->get();
        return view('terms', [
            'meta' => $meta,
            'afternoons' => $afternoons,
            'cities' => $cities
        ]);
    }

    public function privacy()
    {
        $meta = $this->getMeta();
        $cities = City::where('country_id', 55)->orderBy('population', 'desc')->orderBy('name', 'asc')->limit(7)->get()->keyBy('id');
        $afternoons = WorkingAfternoon::where('country_id', 55)->get();
        return view('privacy', [
            'meta' => $meta,
            'afternoons' => $afternoons,
            'cities' => $cities
        ]);
    }

    public function about()
    {
        $meta = $this->getMeta();
        $cities = City::where('country_id', 55)->orderBy('population', 'desc')->orderBy('name', 'asc')->limit(7)->get()->keyBy('id');
        $afternoons = WorkingAfternoon::where('country_id', 55)->get();
        return view('about', [
            'meta' => $meta,
            'afternoons' => $afternoons,
            'cities' => $cities
        ]);
    }

    public function ecosystem()
    {
        $meta = $this->getMeta();
        $cities = City::where('country_id', 55)->orderBy('population', 'desc')->orderBy('name', 'asc')->limit(7)->get()->keyBy('id');
        $afternoons = WorkingAfternoon::where('country_id', 55)->get();
        return view('ecosystem', [
            'meta' => $meta,
            'afternoons' => $afternoons,
            'cities' => $cities
        ]);
    }

    public function partnerships()
    {
        $meta = $this->getMeta();
        $cities = City::where('country_id', 55)->orderBy('population', 'desc')->orderBy('name', 'asc')->limit(7)->get()->keyBy('id');
        $afternoons = WorkingAfternoon::where('country_id', 55)->get();
        return view('partnerships', [
            'meta' => $meta,
            'afternoons' => $afternoons,
            'cities' => $cities
        ]);
    }

    public function contact()
    {
        $meta = $this->getMeta();
        $cities = City::where('country_id', 55)->orderBy('population', 'desc')->orderBy('name', 'asc')->limit(7)->get()->keyBy('id');
        $afternoons = WorkingAfternoon::where('country_id', 55)->get();
        return view('contact', [
            'meta' => $meta,
            'afternoons' => $afternoons,
            'cities' => $cities
        ]);
    }

    public function event($link)
    {
        $event = Event::where('slug', $link)->where('active', 1)->firstOrFail();
        $cities = City::where('country_id', 55)->orderBy('population', 'desc')->orderBy('name', 'asc')->limit(7)->get()->keyBy('id');
        $afternoons = WorkingAfternoon::where('country_id', 55)->get();
        $allCategories = EventCategory::get()->keyBy('id');
        $relatedEvents = Event::where([
            ['id', '!=', $event->id],
            ['start_date', '>=', date('Y-m-d')],
            ['active', 1]
        ])->orderBy('start_date')->orderBy('name')->limit(5)->get();
        $meta = new \StdClass();
        $meta->locale = LaravelLocalization::getCurrentLocale();
        $meta->language = LaravelLocalization::getCurrentLocaleName();
        $meta->languages = LaravelLocalization::getSupportedLocales();
        $meta->metas[$meta->locale] = new \StdClass();
        $meta->metas[$meta->locale]->name = 'SFC.CY';
        $eventName = $event->name;
        $eventCity = $event->is_online ? __('Online') : ($event->city->name ?? __('Cyprus'));
        $eventLocation = $event->is_online ? __('Online') : ($event->location ?? $eventCity);
        $eventDate = \Carbon\Carbon::parse($event->start_date);
        $formattedDate = $eventDate->format('M j, Y');
        $formattedDateTime = $eventDate->format('M j, Y \a\t H:i');
        $now = \Carbon\Carbon::now();
        $isUpcoming = $eventDate->isFuture();
        $isPast = $eventDate->isPast();
        $isToday = $eventDate->isToday();
        if ($isToday) {
            $eventStatus = __('Today');
        } elseif ($isUpcoming) {
            $eventStatus = __('Upcoming');
        } else {
            $eventStatus = __('Past');
        }
        $primaryCategory = '';
        if (!empty($event->categories)) {
            $categoryIDs = explode('][', trim($event->categories, '[]'));
            if (!empty($categoryIDs[0]) && !empty($allCategories[$categoryIDs[0]])) {
                $primaryCategory = $allCategories[$categoryIDs[0]]->name;
            }
        }
        if ($event->is_online) {
            if ($isPast) {
                $meta->metas[$meta->locale]->title = $eventName . ' - ' . $formattedDate . ' | ' . __('Past Online Event') . ' | '. __('SFC.CY');
            } else {
                $meta->metas[$meta->locale]->title = $eventName . ' - ' . $formattedDate . ' | ' . __('Online Event in Cyprus') . ' | '. __('SFC.CY');
            }
        } else {
            if ($isPast) {
                $meta->metas[$meta->locale]->title = $eventName . ' in ' . $eventCity . ' - ' . $formattedDate . ' | ' . __('Past Event') . ' | ' . __('SFC in Cyprus');
            } else {
                $meta->metas[$meta->locale]->title = $eventName . ' in ' . $eventCity . ' - ' . $formattedDate . ' | ' . __('SFC in Cyprus');
            }
        }
        $description = strip_tags($event->description ?? '');
        $shortDescription = Str::limit($description, 100);
        $priceText = '';
        if ($event->is_free || empty($event->price)) {
            $priceText = __('Free event') . '. ';
        } else {
            $priceText = '€' . number_format($event->price, 2) . ' ' . __('event') . '. ';
        }
        $timeText = '';
        if ($event->end_date && date('Y-m-d', strtotime($event->start_date)) == date('Y-m-d', strtotime($event->end_date))) {
            $timeText = $eventDate->format('H:i') . '-' . \Carbon\Carbon::parse($event->end_date)->format('H:i') . '. ';
        } else {
            $timeText = $eventDate->format('H:i') . '. ';
        }
        if ($shortDescription) {
            $meta->metas[$meta->locale]->description = $priceText . $shortDescription . ' | ' . $formattedDateTime . ' | ' . __('Cyprus startup events') . '.';
        } else {
            $baseDescription = $event->is_online ? __('Online event for the Cyprus startup community') : __('Event in') . ' ' . $eventCity . ' ' . __('for the Cyprus startup community');
            $meta->metas[$meta->locale]->description = $priceText . $baseDescription . ($primaryCategory ? ' ' . __('focusing on') . ' ' . strtolower($primaryCategory) : '') . '. ' . $formattedDateTime . '.';
        }
        $keywords = [$eventName, __('event'), __('startup event'), __('Cyprus'), __('SFC.CY')];
        if (!$event->is_online) {
            $keywords[] = $eventCity;
            $keywords[] = __('networking');
        } else {
            $keywords[] = __('online event');
            $keywords[] = __('virtual event');
        }
        if ($primaryCategory) {
            $keywords[] = $primaryCategory;
            $keywords[] = $primaryCategory . ' '. __('event');
        }
        $keywords[] = $formattedDate;
        $keywords[] = $eventDate->format('Y');
        $keywords[] = strtolower($eventDate->format('F'));
        if ($event->is_free || empty($event->price)) {
            $keywords[] = __('free event');
        }
        if ($isUpcoming) {
            $keywords[] = __('upcoming event');
        } elseif ($isPast) {
            $keywords[] = __('past event');
        }
        if (!empty($event->languages)) {
            $languageIDs = explode('][', trim($event->languages, '[]'));
            $allLanguages = config('languages.locales');
            foreach ($languageIDs as $languageID) {
                if (isset($allLanguages[$languageID])) {
                    $keywords[] = $allLanguages[$languageID]['name'] . ' ' . __('event');
                }
            }
        }
        $meta->metas[$meta->locale]->keywords = implode(', ', $keywords);
        return view('event', [
            'meta' => $meta,
            'afternoons' => $afternoons,
            'cities' => $cities,
            'event' => $event,
            'allCategories' => $allCategories,
            'relatedEvents' => $relatedEvents
        ]);
    }

    public function events()
    {
        /*$parentCategories = EventCategory::where('parent_id', 0)->get();
        foreach ($parentCategories as $category) {
            echo $category->name . ' - "parameter_link": ' . $category->slug . '<br>';
            $subCategories = EventCategory::where('parent_id', $category->id)->get();
            foreach ($subCategories as $subCategory) {
                echo $subCategory->name . ' - "parameter_link": ' . $category->slug . ', parameter_category: ' . $subCategory->slug . '<br>';
            }
            echo '<hr>';
        }*/
        /*$parentCategories = StartupCategory::where('parent_id', 0)->get();
        foreach ($parentCategories as $category) {
            echo $category->name . ' - "parameter_link": ' . $category->slug . '<br>';
            $subCategories = StartupCategory::where('parent_id', $category->id)->get();
            foreach ($subCategories as $subCategory) {
                echo $subCategory->name . ' - "parameter_link": ' . $category->slug . ', parameter_category: ' . $subCategory->slug . '<br>';
            }
            echo '<hr>';
        }*/
        /*$parentCategories = BusinessCategory::where('parent_id', 0)->get();
        foreach ($parentCategories as $category) {
            echo $category->name . ' - "parameter_link": ' . $category->slug . '<br>';
            $subCategories = BusinessCategory::where('parent_id', $category->id)->get();
            foreach ($subCategories as $subCategory) {
                echo $subCategory->name . ' - "parameter_link": ' . $category->slug . ', parameter_category: ' . $subCategory->slug . '<br>';
            }
            echo '<hr>';
        }*/
        /*$parentCategories = ServiceCategory::where('parent_id', 0)->get();
        foreach ($parentCategories as $category) {
            echo $category->name . ' - "parameter_link": ' . $category->slug . '<br>';
            $subCategories = ServiceCategory::where('parent_id', $category->id)->get();
            foreach ($subCategories as $subCategory) {
                echo $subCategory->name . ' - "parameter_link": ' . $category->slug . ', parameter_category: ' . $subCategory->slug . '<br>';
            }
            echo '<hr>';
        }*/
        /*$cities = City::where('country_id', 55)->get();
        foreach ($cities as $key => $city) {
            echo $city->name . (!empty($city->region->name) ? ' (' . $city->region->name . ')' : '') . ' - "parameter_link": ' . $city->slug . '<br>';
            if (!empty($key) && $key % 30 == 0) {
                echo '<hr>';
            }
        }*/
        //exit;
        $meta = new \StdClass();
        $meta->locale = LaravelLocalization::getCurrentLocale();
        $meta->language = LaravelLocalization::getCurrentLocaleName();
        $meta->languages = LaravelLocalization::getSupportedLocales();
        $meta->metas[$meta->locale] = new \StdClass();
        $meta->metas[$meta->locale]->name = 'SFC.CY';
        $metaData = EventMeta::whereNull('parameter_link')->whereNull('parameter_category')->where('language', $meta->locale)->first();
        if (!empty($metaData->id)) {
            $meta->metas[$meta->locale]->title = $metaData->meta_title;
            $meta->metas[$meta->locale]->description = $metaData->meta_description;
            $meta->metas[$meta->locale]->keywords = $metaData->meta_keywords;
            $meta->h1 = $metaData->page_h1;
            $meta->subtext = $metaData->page_subtitle;
            $meta->subtitle = $metaData->page_h2;
            $meta->subnote = $metaData->page_subnote;
            $meta->page_seo = $metaData->page_seo;
        }
        $cities = City::where('country_id', 55)->orderBy('population', 'desc')->orderBy('name', 'asc')->limit(7)->get()->keyBy('id');
        $afternoons = WorkingAfternoon::where('country_id', 55)->get();
        $categories = EventCategory::where('parent_id', 0)->orderBy('ord', 'asc')->orderBy('name', 'asc')->get();
        $subcategories = EventCategory::where('parent_id', '!=', 0)->count();
        $allCategories = EventCategory::get()->keyBy('id');
        $events = Event::where([
            ['start_date', '>=', date('Y-m-d')],
            ['active', 1]
        ])->orderBy('start_date')->orderBy('name')->paginate(20);
        return view('events', [
            'meta' => $meta,
            'afternoons' => $afternoons,
            'cities' => $cities,
            'categories' => $categories,
            'subcategories' => $subcategories,
            'allCategories' => $allCategories,
            'events' => $events
        ]);
    }

    public function eventsFilter(Request $request, $link)
    {
        //$meta = $this->getMeta($link);
        $meta = new \StdClass();
        $meta->locale = LaravelLocalization::getCurrentLocale();
        $meta->language = LaravelLocalization::getCurrentLocaleName();
        $meta->languages = LaravelLocalization::getSupportedLocales();
        $meta->metas[$meta->locale] = new \StdClass();
        $meta->metas[$meta->locale]->name = 'SFC.CY';
        $metaData = EventMeta::where('parameter_link', $link)->whereNull('parameter_category')->where('language', $meta->locale)->first();
        if (!empty($metaData->id)) {
            $meta->metas[$meta->locale]->title = $metaData->meta_title;
            $meta->metas[$meta->locale]->description = $metaData->meta_description;
            $meta->metas[$meta->locale]->keywords = $metaData->meta_keywords;
            $meta->h1 = $metaData->page_h1;
            $meta->subtext = $metaData->page_subtitle;
            $meta->subtitle = $metaData->page_h2;
            $meta->subnote = $metaData->page_subnote;
            $meta->page_seo = $metaData->page_seo;
        }
        $cities = City::where('country_id', 55)->orderBy('population', 'desc')->orderBy('name', 'asc')->limit(7)->get()->keyBy('id');
        $afternoons = WorkingAfternoon::where('country_id', 55)->get();
        $categories = EventCategory::where('parent_id', 0)->orderBy('ord', 'asc')->orderBy('name', 'asc')->get();
        $subcategories = EventCategory::where('parent_id', '!=', 0)->count();
        $allCategories = EventCategory::get()->keyBy('id');
        if (in_array($link, array('online', 'past', 'free', 'cities'))) {
            if ($link == 'online') {
                $events = Event::where([
                    ['is_online', 1],
                    ['start_date', '>=', date('Y-m-d')],
                    ['active', 1]
                ])->orderBy('start_date')->orderBy('name')->paginate(20);
            } elseif ($link == 'past') {
                $events = Event::where([
                    ['end_date', '<', date('Y-m-d')],
                    ['active', 1]
                ])->orderBy('start_date', 'desc')->orderBy('name')->paginate(20);
            } elseif ($link == 'free') {
                $events = Event::where([
                    ['is_free', 1],
                    ['start_date', '>=', date('Y-m-d')],
                    ['active', 1]
                ])->orderBy('start_date')->orderBy('name')->paginate(20);
            } elseif ($link == 'cities') {
                $events = null;
                $allCities = City::where('country_id', 55)->where('population', '<=', 10000)->orderBy('name', 'asc')->get();
                $majorCities = City::where('country_id', 55)->where('population', '>', 10000)->orderBy('population', 'desc')->orderBy('name', 'asc')->get()->keyBy('id');
            }
            $currentCategory = null;
            $currentCity = null;
        } else {
            $currentCategory = EventCategory::where('slug', $link)->first();
            if (!empty($currentCategory)) {
                $events = Event::where([
                    ['categories', 'like', '%[' . $currentCategory->id . ']%'],
                    ['start_date', '>=', date('Y-m-d')],
                    ['active', 1]
                ])->orderBy('start_date')->orderBy('name')->paginate(20);
                $categories = EventCategory::where('parent_id', $currentCategory->id)->orderBy('ord', 'asc')->orderBy('name', 'asc')->get();
                $currentCity = null;
            } else {
                $currentCity = City::where('slug', $link)->firstOrFail();
                $events = Event::where([
                    ['city_id', $currentCity->id],
                    ['start_date', '>=', date('Y-m-d')],
                    ['active', 1]
                ])->orderBy('start_date')->orderBy('name')->paginate(20);
                $currentCategory = null;
            }
        }
        return view('events', [
            'meta' => $meta,
            'afternoons' => $afternoons,
            'cities' => $cities,
            'categories' => $categories,
            'subcategories' => $subcategories,
            'allCategories' => $allCategories,
            'events' => $events,
            'currentCategory' => $currentCategory,
            'currentCity' => $currentCity,
            'allCities' => $allCities ?? null,
            'majorCities' => $majorCities ?? null
        ]);
    }

    public function eventsFilterCategory(Request $request, $link, $category)
    {
        //$meta = $this->getMeta($link);
        $meta = new \StdClass();
        $meta->locale = LaravelLocalization::getCurrentLocale();
        $meta->language = LaravelLocalization::getCurrentLocaleName();
        $meta->languages = LaravelLocalization::getSupportedLocales();
        $meta->metas[$meta->locale] = new \StdClass();
        $meta->metas[$meta->locale]->name = 'SFC.CY';
        $metaData = EventMeta::where('parameter_link', $link)->where('parameter_category', $category)->where('language', $meta->locale)->first();
        if (!empty($metaData->id)) {
            $meta->metas[$meta->locale]->title = $metaData->meta_title;
            $meta->metas[$meta->locale]->description = $metaData->meta_description;
            $meta->metas[$meta->locale]->keywords = $metaData->meta_keywords;
            $meta->h1 = $metaData->page_h1;
            $meta->subtext = $metaData->page_subtitle;
            $meta->subtitle = $metaData->page_h2;
            $meta->subnote = $metaData->page_subnote;
            $meta->page_seo = $metaData->page_seo;
        }
        $cities = City::where('country_id', 55)->orderBy('population', 'desc')->orderBy('name', 'asc')->limit(7)->get()->keyBy('id');
        $afternoons = WorkingAfternoon::where('country_id', 55)->get();
        $subcategories = EventCategory::where('parent_id', '!=', 0)->count();
        $allCategories = EventCategory::get()->keyBy('id');
        $currentCategory = EventCategory::where('slug', $category)->firstOrFail();
        $parentCategory = EventCategory::where('slug', $link)->firstOrFail();
        $events = Event::where([
            ['categories', 'like', '%[' . $currentCategory->id . ']%'],
            ['start_date', '>=', date('Y-m-d')],
            ['active', 1]
        ])->orderBy('start_date')->orderBy('name')->paginate(20);
        $categories = EventCategory::where('parent_id', $currentCategory->parent_id)->orderBy('ord', 'asc')->orderBy('name', 'asc')->get();
        $currentCity = null;
        return view('events', [
            'meta' => $meta,
            'afternoons' => $afternoons,
            'cities' => $cities,
            'categories' => $categories,
            'subcategories' => $subcategories,
            'allCategories' => $allCategories,
            'events' => $events,
            'currentCategory' => $currentCategory,
            'currentCity' => $currentCity
        ]);
    }

    public function startups()
    {
        $meta = new \StdClass();
        $meta->locale = LaravelLocalization::getCurrentLocale();
        $meta->language = LaravelLocalization::getCurrentLocaleName();
        $meta->languages = LaravelLocalization::getSupportedLocales();
        $meta->metas[$meta->locale] = new \StdClass();
        $meta->metas[$meta->locale]->name = 'SFC.CY';
        $metaData = StartupMeta::whereNull('parameter_link')->whereNull('parameter_category')->where('language', $meta->locale)->first();
        if (!empty($metaData->id)) {
            $meta->metas[$meta->locale]->title = $metaData->meta_title;
            $meta->metas[$meta->locale]->description = $metaData->meta_description;
            $meta->metas[$meta->locale]->keywords = $metaData->meta_keywords;
            $meta->h1 = $metaData->page_h1;
            $meta->subtext = $metaData->page_subtitle;
            $meta->subtitle = $metaData->page_h2;
            $meta->subnote = $metaData->page_subnote;
            $meta->page_seo = $metaData->page_seo;
        }
        $cities = City::where('country_id', 55)->orderBy('population', 'desc')->orderBy('name', 'asc')->limit(7)->get()->keyBy('id');
        $categories = StartupCategory::where('parent_id', 0)->orderBy('ord', 'asc')->orderBy('name', 'asc')->get();
        $subcategories = StartupCategory::where('parent_id', '!=', 0)->count();
        $allCategories = StartupCategory::get()->keyBy('id');
        $startups = Startup::where('active', 1)->orderBy('name')->paginate(20);
        $afternoons = WorkingAfternoon::where('country_id', 55)->get();
        return view('startups', [
            'meta' => $meta,
            'cities' => $cities,
            'afternoons' => $afternoons,
            'categories' => $categories,
            'subcategories' => $subcategories,
            'allCategories' => $allCategories,
            'startups' => $startups
        ]);
    }

    public function startupsFilter(Request $request, $link)
    {
        //$meta = $this->getMeta($link);
        $meta = new \StdClass();
        $meta->locale = LaravelLocalization::getCurrentLocale();
        $meta->language = LaravelLocalization::getCurrentLocaleName();
        $meta->languages = LaravelLocalization::getSupportedLocales();
        $meta->metas[$meta->locale] = new \StdClass();
        $meta->metas[$meta->locale]->name = 'SFC.CY';
        $metaData = StartupMeta::where('parameter_link', $link)->whereNull('parameter_category')->where('language', $meta->locale)->first();
        if (!empty($metaData->id)) {
            $meta->metas[$meta->locale]->title = $metaData->meta_title;
            $meta->metas[$meta->locale]->description = $metaData->meta_description;
            $meta->metas[$meta->locale]->keywords = $metaData->meta_keywords;
            $meta->h1 = $metaData->page_h1;
            $meta->subtext = $metaData->page_subtitle;
            $meta->subtitle = $metaData->page_h2;
            $meta->subnote = $metaData->page_subnote;
            $meta->page_seo = $metaData->page_seo;
        }
        $cities = City::where('country_id', 55)->orderBy('population', 'desc')->orderBy('name', 'asc')->limit(7)->get()->keyBy('id');
        $categories = StartupCategory::where('parent_id', 0)->orderBy('ord', 'asc')->orderBy('name', 'asc')->get();
        $subcategories = StartupCategory::where('parent_id', '!=', 0)->count();
        $allCategories = StartupCategory::get()->keyBy('id');
        if (in_array($link, array('raising', 'recent', 'cities'))) {
            if ($link == 'raising') {
                $startups = Startup::where([
                    ['is_fundraising', 1],
                    ['active', 1]
                ])->orderBy('name')->paginate(20);
            } elseif ($link == 'recent') {
                $startups = Startup::where('active', 1)->orderBy('id', 'desc')->orderBy('name')->paginate(20);
            } elseif ($link == 'cities') {
                $startups = null;
                $allCities = City::where('country_id', 55)->where('population', '<=', 10000)->orderBy('name', 'asc')->get();
                $majorCities = City::where('country_id', 55)->where('population', '>', 10000)->orderBy('population', 'desc')->orderBy('name', 'asc')->get()->keyBy('id');
            }
            $currentCategory = null;
            $currentCity = null;
        } else {
            $currentCategory = StartupCategory::where('slug', $link)->first();
            if (!empty($currentCategory)) {
                $startups = Startup::where([
                    ['categories', 'like', '%[' . $currentCategory->id . ']%'],
                    ['active', 1]
                ])->orderBy('name')->paginate(20);
                $categories = StartupCategory::where('parent_id', $currentCategory->id)->orderBy('ord', 'asc')->orderBy('name', 'asc')->get();
                $currentCity = null;
            } else {
                $currentCity = City::where('slug', $link)->firstOrFail();
                $startups = Startup::where([
                    ['city_id', $currentCity->id],
                    ['active', 1]
                ])->orderBy('name')->paginate(20);
                $currentCategory = null;
            }
        }
        $afternoons = WorkingAfternoon::where('country_id', 55)->get();
        return view('startups', [
            'meta' => $meta,
            'cities' => $cities,
            'categories' => $categories,
            'afternoons' => $afternoons,
            'subcategories' => $subcategories,
            'allCategories' => $allCategories,
            'startups' => $startups,
            'currentCategory' => $currentCategory,
            'currentCity' => $currentCity,
            'allCities' => $allCities ?? null,
            'majorCities' => $majorCities ?? null
        ]);
    }

    public function startupsFilterCategory(Request $request, $link, $category)
    {
        //$meta = $this->getMeta($link);
        $meta = new \StdClass();
        $meta->locale = LaravelLocalization::getCurrentLocale();
        $meta->language = LaravelLocalization::getCurrentLocaleName();
        $meta->languages = LaravelLocalization::getSupportedLocales();
        $meta->metas[$meta->locale] = new \StdClass();
        $meta->metas[$meta->locale]->name = 'SFC.CY';
        $metaData = StartupMeta::where('parameter_link', $link)->where('parameter_category', $category)->where('language', $meta->locale)->first();
        if (!empty($metaData->id)) {
            $meta->metas[$meta->locale]->title = $metaData->meta_title;
            $meta->metas[$meta->locale]->description = $metaData->meta_description;
            $meta->metas[$meta->locale]->keywords = $metaData->meta_keywords;
            $meta->h1 = $metaData->page_h1;
            $meta->subtext = $metaData->page_subtitle;
            $meta->subtitle = $metaData->page_h2;
            $meta->subnote = $metaData->page_subnote;
            $meta->page_seo = $metaData->page_seo;
        }
        $cities = City::where('country_id', 55)->orderBy('population', 'desc')->orderBy('name', 'asc')->limit(7)->get()->keyBy('id');
        $subcategories = StartupCategory::where('parent_id', '!=', 0)->count();
        $allCategories = StartupCategory::get()->keyBy('id');
        $currentCategory = StartupCategory::where('slug', $category)->firstOrFail();
        $parentCategory = StartupCategory::where('slug', $link)->firstOrFail();
        $startups = Startup::where([
            ['categories', 'like', '%[' . $currentCategory->id . ']%'],
            ['active', 1]
        ])->orderBy('name')->paginate(20);
        $categories = StartupCategory::where('parent_id', $currentCategory->parent_id)->orderBy('ord', 'asc')->orderBy('name', 'asc')->get();
        $currentCity = null;
        $afternoons = WorkingAfternoon::where('country_id', 55)->get();
        return view('startups', [
            'meta' => $meta,
            'cities' => $cities,
            'afternoons' => $afternoons,
            'categories' => $categories,
            'subcategories' => $subcategories,
            'allCategories' => $allCategories,
            'startups' => $startups,
            'currentCategory' => $currentCategory,
            'currentCity' => $currentCity
        ]);
    }

    public function startup($link)
    {
        $startup = Startup::where('slug', $link)->where('active', 1)->firstOrFail();
        $cities = City::where('country_id', 55)->orderBy('population', 'desc')->orderBy('name', 'asc')->limit(7)->get()->keyBy('id');
        $afternoons = WorkingAfternoon::where('country_id', 55)->get();
        $allCategories = StartupCategory::get()->keyBy('id');
        $meta = new \StdClass();
        $meta->locale = LaravelLocalization::getCurrentLocale();
        $meta->language = LaravelLocalization::getCurrentLocaleName();
        $meta->languages = LaravelLocalization::getSupportedLocales();
        $meta->metas[$meta->locale] = new \StdClass();
        $meta->metas[$meta->locale]->name = 'SFC.CY';
        $startupName = $startup->name;
        $startupCity = $startup->is_online ? __('Online') : ($startup->city->name ?? __('Cyprus'));
        $startupLocation = $startup->is_online ? __('Online') : ($startup->location ?? $startupCity);
        $primaryCategory = '';
        if (!empty($startup->categories)) {
            $categoryIDs = explode('][', trim($startup->categories, '[]'));
            if (!empty($categoryIDs[0]) && !empty($allCategories[$categoryIDs[0]])) {
                $primaryCategory = $allCategories[$categoryIDs[0]]->name;
            }
        }
        if ($startup->is_online) {
            $meta->metas[$meta->locale]->title = $startupName . ($primaryCategory ? ' - ' . $primaryCategory : '') . ' | ' . __('Online Startup in Cyprus') . ' | ' . __('SFC.CY');
        } else {
            $meta->metas[$meta->locale]->title = $startupName . ' ' . __('in') . ' ' . $startupCity . ($primaryCategory ? ' - ' . $primaryCategory : '') . ' | ' . __('SFC in Cyprus');
        }
        $description = strip_tags($startup->description ?? '');
        $shortDescription = Str::limit($description, 120);
        if ($startup->is_fundraising) {
            $fundraisingText = __('Currently seeking investment.') . ' ';
        } else {
            $fundraisingText = '';
        }
        $foundingText = $startup->founding_year ? __('Founded in') . ' ' . $startup->founding_year . '. ' : '';
        if ($shortDescription) {
            $meta->metas[$meta->locale]->description = $fundraisingText . $foundingText . $shortDescription . ' | ' . __('Cyprus startup ecosystem') . '.';
        } else {
            $baseDescription = $startup->is_online ? __('Online startup based in Cyprus') : __('Startup based in') . ' ' . $startupCity . ', ' . __('Cyprus');
            $meta->metas[$meta->locale]->description = $fundraisingText . $foundingText . $baseDescription . ($primaryCategory ? ' ' . __('specializing in') . ' ' . strtolower($primaryCategory) : '') . '. ' . __('Part of the Cyprus startup ecosystem.');
        }
        $keywords = [$startupName, __('startup'), __('Cyprus'), __('SFC.CY')];
        if (!$startup->is_online) {
            $keywords[] = $startupCity;
        } else {
            $keywords[] = __('online startup');
        }
        if ($primaryCategory) {
            $keywords[] = $primaryCategory;
        }
        if ($startup->founding_year) {
            $keywords[] = $startup->founding_year;
        }
        if ($startup->is_fundraising) {
            $keywords[] = __('fundraising');
            $keywords[] = __('investment');
        }
        $meta->metas[$meta->locale]->keywords = implode(', ', $keywords);
        return view('startup', [
            'meta' => $meta,
            'afternoons' => $afternoons,
            'cities' => $cities,
            'startup' => $startup,
            'allCategories' => $allCategories
        ]);
    }

    public function members()
    {
        $meta = $this->getMeta();
        $cities = City::where('country_id', 55)->orderBy('population', 'desc')->orderBy('name', 'asc')->limit(7)->get()->keyBy('id');
        $afternoons = WorkingAfternoon::where('country_id', 55)->get();
        $members = UserProfile::whereHas('user', function ($query) {
            $query->where('active', 1);
        })->orderBy('id', 'desc')->limit(10)->get();
        $meta->subtitle = __('Online Startup Events');
        $meta->subnote = __('web.events_3');
        return view('members', [
            'meta' => $meta,
            'afternoons' => $afternoons,
            'cities' => $cities,
            'members' => $members
        ]);
    }

    public function membersFilter(Request $request, $link)
    {
        $meta = $this->getMeta($link);
        $cities = City::where('country_id', 55)->orderBy('population', 'desc')->orderBy('name', 'asc')->limit(7)->get()->keyBy('id');
        if (in_array($link, array('cities'))) {
            if ($link == 'cities') {
                $members = null;
                $meta->subtitle = __('Startup Events in Cities');
                $meta->subnote = __('web.events_6');
                $allCities = City::where('country_id', 55)->where('population', '<=', 10000)->orderBy('name', 'asc')->get();
                $majorCities = City::where('country_id', 55)->where('population', '>', 10000)->orderBy('population', 'desc')->orderBy('name', 'asc')->get()->keyBy('id');
            }
            $currentCity = null;
        } else {
            $currentCity = City::where('slug', $link)->firstOrFail();
            $members = UserProfile::whereHas('user', function ($query) use ($currentCity) {
                $query->where('active', 1)->where('city_id', $currentCity->id);
            })->orderBy('id', 'desc')->limit(10)->get();
            $meta->subtitle = __('Startup Events in') . ' ' . $currentCity->name;
            $meta->subnote = __('web.events_7') . ' ' . $currentCity->name;
        }
        $afternoons = WorkingAfternoon::where('country_id', 55)->get();
        return view('members', [
            'meta' => $meta,
            'cities' => $cities,
            'afternoons' => $afternoons,
            'members' => $members,
            'currentCity' => $currentCity,
            'allCities' => $allCities ?? null,
            'majorCities' => $majorCities ?? null
        ]);
    }

    public function businesses()
    {
        //$meta = $this->getMeta();
        $meta = new \StdClass();
        $meta->locale = LaravelLocalization::getCurrentLocale();
        $meta->language = LaravelLocalization::getCurrentLocaleName();
        $meta->languages = LaravelLocalization::getSupportedLocales();
        $meta->metas[$meta->locale] = new \StdClass();
        $meta->metas[$meta->locale]->name = 'SFC.CY';
        $metaData = BusinessMeta::whereNull('parameter_link')->whereNull('parameter_category')->where('language', $meta->locale)->first();
        if (!empty($metaData->id)) {
            $meta->metas[$meta->locale]->title = $metaData->meta_title;
            $meta->metas[$meta->locale]->description = $metaData->meta_description;
            $meta->metas[$meta->locale]->keywords = $metaData->meta_keywords;
            $meta->h1 = $metaData->page_h1;
            $meta->subtext = $metaData->page_subtitle;
            $meta->subtitle = $metaData->page_h2;
            $meta->subnote = $metaData->page_subnote;
            $meta->page_seo = $metaData->page_seo;
        }
        $cities = City::where('country_id', 55)->orderBy('population', 'desc')->orderBy('name', 'asc')->limit(7)->get()->keyBy('id');
        $categories = BusinessCategory::where('parent_id', 0)->orderBy('ord', 'asc')->orderBy('name', 'asc')->get();
        $subcategories = BusinessCategory::where('parent_id', '!=', 0)->count();
        $allCategories = BusinessCategory::get()->keyBy('id');
        $businesses = Business::where('active', 1)->orderBy('name')->paginate(20);
        $afternoons = WorkingAfternoon::where('country_id', 55)->get();
        $meta->subtitle = __('Cyprus Startups');
        $meta->subnote = __('web.startups_1');
        return view('businesses', [
            'meta' => $meta,
            'cities' => $cities,
            'afternoons' => $afternoons,
            'categories' => $categories,
            'subcategories' => $subcategories,
            'allCategories' => $allCategories,
            'businesses' => $businesses
        ]);
    }

    public function businessesFilter(Request $request, $link)
    {
        //$meta = $this->getMeta($link);
        $meta = new \StdClass();
        $meta->locale = LaravelLocalization::getCurrentLocale();
        $meta->language = LaravelLocalization::getCurrentLocaleName();
        $meta->languages = LaravelLocalization::getSupportedLocales();
        $meta->metas[$meta->locale] = new \StdClass();
        $meta->metas[$meta->locale]->name = 'SFC.CY';
        $metaData = BusinessMeta::where('parameter_link', $link)->whereNull('parameter_category')->where('language', $meta->locale)->first();
        if (!empty($metaData->id)) {
            $meta->metas[$meta->locale]->title = $metaData->meta_title;
            $meta->metas[$meta->locale]->description = $metaData->meta_description;
            $meta->metas[$meta->locale]->keywords = $metaData->meta_keywords;
            $meta->h1 = $metaData->page_h1;
            $meta->subtext = $metaData->page_subtitle;
            $meta->subtitle = $metaData->page_h2;
            $meta->subnote = $metaData->page_subnote;
            $meta->page_seo = $metaData->page_seo;
        }
        $cities = City::where('country_id', 55)->orderBy('population', 'desc')->orderBy('name', 'asc')->limit(7)->get()->keyBy('id');
        $categories = BusinessCategory::where('parent_id', 0)->orderBy('ord', 'asc')->orderBy('name', 'asc')->get();
        $subcategories = BusinessCategory::where('parent_id', '!=', 0)->count();
        $allCategories = BusinessCategory::get()->keyBy('id');
        if (in_array($link, array('raising', 'recent', 'cities'))) {
            if ($link == 'raising') {
                $businesses = Business::where([
                    ['is_fundraising', 1],
                    ['active', 1]
                ])->orderBy('name')->paginate(20);
            } elseif ($link == 'recent') {
                $businesses = Business::where('active', 1)->orderBy('id', 'desc')->orderBy('name')->paginate(20);
            } elseif ($link == 'cities') {
                $businesses = null;
                $allCities = City::where('country_id', 55)->where('population', '<=', 10000)->orderBy('name', 'asc')->get();
                $majorCities = City::where('country_id', 55)->where('population', '>', 10000)->orderBy('population', 'desc')->orderBy('name', 'asc')->get()->keyBy('id');
            }
            $currentCategory = null;
            $currentCity = null;
        } else {
            $currentCategory = BusinessCategory::where('slug', $link)->first();
            if (!empty($currentCategory)) {
                $businesses = Business::where([
                    ['categories', 'like', '%[' . $currentCategory->id . ']%'],
                    ['active', 1]
                ])->orderBy('name')->paginate(20);
                $categories = BusinessCategory::where('parent_id', $currentCategory->id)->orderBy('ord', 'asc')->orderBy('name', 'asc')->get();
                $currentCity = null;
            } else {
                $currentCity = City::where('slug', $link)->firstOrFail();
                $businesses = Business::where([
                    ['city_id', $currentCity->id],
                    ['active', 1]
                ])->orderBy('name')->paginate(20);
                $currentCategory = null;
            }
        }
        $afternoons = WorkingAfternoon::where('country_id', 55)->get();
        return view('businesses', [
            'meta' => $meta,
            'cities' => $cities,
            'categories' => $categories,
            'afternoons' => $afternoons,
            'subcategories' => $subcategories,
            'allCategories' => $allCategories,
            'businesses' => $businesses,
            'currentCategory' => $currentCategory,
            'currentCity' => $currentCity,
            'allCities' => $allCities ?? null,
            'majorCities' => $majorCities ?? null
        ]);
    }

    public function businessesFilterCategory(Request $request, $link, $category)
    {
        //$meta = $this->getMeta($link);
        $meta = new \StdClass();
        $meta->locale = LaravelLocalization::getCurrentLocale();
        $meta->language = LaravelLocalization::getCurrentLocaleName();
        $meta->languages = LaravelLocalization::getSupportedLocales();
        $meta->metas[$meta->locale] = new \StdClass();
        $meta->metas[$meta->locale]->name = 'SFC.CY';
        $metaData = BusinessMeta::where('parameter_link', $link)->where('parameter_category', $category)->where('language', $meta->locale)->first();
        if (!empty($metaData->id)) {
            $meta->metas[$meta->locale]->title = $metaData->meta_title;
            $meta->metas[$meta->locale]->description = $metaData->meta_description;
            $meta->metas[$meta->locale]->keywords = $metaData->meta_keywords;
            $meta->h1 = $metaData->page_h1;
            $meta->subtext = $metaData->page_subtitle;
            $meta->subtitle = $metaData->page_h2;
            $meta->subnote = $metaData->page_subnote;
            $meta->page_seo = $metaData->page_seo;
        }
        $cities = City::where('country_id', 55)->orderBy('population', 'desc')->orderBy('name', 'asc')->limit(7)->get()->keyBy('id');
        $subcategories = BusinessCategory::where('parent_id', '!=', 0)->count();
        $allCategories = BusinessCategory::get()->keyBy('id');
        $currentCategory = BusinessCategory::where('slug', $category)->firstOrFail();
        $parentCategory = BusinessCategory::where('slug', $link)->firstOrFail();
        $businesses = Business::where([
            ['categories', 'like', '%[' . $currentCategory->id . ']%'],
            ['active', 1]
        ])->orderBy('name')->paginate(20);
        $categories = BusinessCategory::where('parent_id', $currentCategory->parent_id)->orderBy('ord', 'asc')->orderBy('name', 'asc')->get();
        $currentCity = null;
        $afternoons = WorkingAfternoon::where('country_id', 55)->get();
        return view('businesses', [
            'meta' => $meta,
            'cities' => $cities,
            'afternoons' => $afternoons,
            'categories' => $categories,
            'subcategories' => $subcategories,
            'allCategories' => $allCategories,
            'businesses' => $businesses,
            'currentCategory' => $currentCategory,
            'currentCity' => $currentCity
        ]);
    }

    public function services()
    {
        //$meta = $this->getMeta();
        $meta = new \StdClass();
        $meta->locale = LaravelLocalization::getCurrentLocale();
        $meta->language = LaravelLocalization::getCurrentLocaleName();
        $meta->languages = LaravelLocalization::getSupportedLocales();
        $meta->metas[$meta->locale] = new \StdClass();
        $meta->metas[$meta->locale]->name = 'SFC.CY';
        $metaData = ServiceMeta::whereNull('parameter_link')->whereNull('parameter_category')->where('language', $meta->locale)->first();
        if (!empty($metaData->id)) {
            $meta->metas[$meta->locale]->title = $metaData->meta_title;
            $meta->metas[$meta->locale]->description = $metaData->meta_description;
            $meta->metas[$meta->locale]->keywords = $metaData->meta_keywords;
            $meta->h1 = $metaData->page_h1;
            $meta->subtext = $metaData->page_subtitle;
            $meta->subtitle = $metaData->page_h2;
            $meta->subnote = $metaData->page_subnote;
            $meta->page_seo = $metaData->page_seo;
        }
        $cities = City::where('country_id', 55)->orderBy('population', 'desc')->orderBy('name', 'asc')->limit(7)->get()->keyBy('id');
        $categories = ServiceCategory::where('parent_id', 0)->orderBy('ord', 'asc')->orderBy('name', 'asc')->get();
        $subcategories = ServiceCategory::where('parent_id', '!=', 0)->count();
        $allCategories = ServiceCategory::get()->keyBy('id');
        $services = Service::where('active', 1)->orderBy('name')->paginate(20);
        $afternoons = WorkingAfternoon::where('country_id', 55)->get();
        return view('services', [
            'meta' => $meta,
            'cities' => $cities,
            'afternoons' => $afternoons,
            'categories' => $categories,
            'subcategories' => $subcategories,
            'allCategories' => $allCategories,
            'services' => $services
        ]);
    }

    public function servicesFilter(Request $request, $link)
    {
        //$meta = $this->getMeta($link);
        $meta = new \StdClass();
        $meta->locale = LaravelLocalization::getCurrentLocale();
        $meta->language = LaravelLocalization::getCurrentLocaleName();
        $meta->languages = LaravelLocalization::getSupportedLocales();
        $meta->metas[$meta->locale] = new \StdClass();
        $meta->metas[$meta->locale]->name = 'SFC.CY';
        $metaData = ServiceMeta::where('parameter_link', $link)->whereNull('parameter_category')->where('language', $meta->locale)->first();
        if (!empty($metaData->id)) {
            $meta->metas[$meta->locale]->title = $metaData->meta_title;
            $meta->metas[$meta->locale]->description = $metaData->meta_description;
            $meta->metas[$meta->locale]->keywords = $metaData->meta_keywords;
            $meta->h1 = $metaData->page_h1;
            $meta->subtext = $metaData->page_subtitle;
            $meta->subtitle = $metaData->page_h2;
            $meta->subnote = $metaData->page_subnote;
            $meta->page_seo = $metaData->page_seo;
        }
        $cities = City::where('country_id', 55)->orderBy('population', 'desc')->orderBy('name', 'asc')->limit(7)->get()->keyBy('id');
        $categories = ServiceCategory::where('parent_id', 0)->orderBy('ord', 'asc')->orderBy('name', 'asc')->get();
        $subcategories = ServiceCategory::where('parent_id', '!=', 0)->count();
        $allCategories = ServiceCategory::get()->keyBy('id');
        if (in_array($link, array('raising', 'recent', 'cities'))) {
            if ($link == 'recent') {
                $services = Service::where('active', 1)->orderBy('id', 'desc')->orderBy('name')->paginate(20);
            }
            $currentCategory = null;
        } else {
            $currentCategory = ServiceCategory::where('slug', $link)->first();
            if (!empty($currentCategory)) {
                $services = Service::where([
                    ['categories', 'like', '%[' . $currentCategory->id . ']%'],
                    ['active', 1]
                ])->orderBy('name')->paginate(20);
                $categories = ServiceCategory::where('parent_id', $currentCategory->id)->orderBy('ord', 'asc')->orderBy('name', 'asc')->get();
            }
        }
        $afternoons = WorkingAfternoon::where('country_id', 55)->get();
        return view('services', [
            'meta' => $meta,
            'cities' => $cities,
            'categories' => $categories,
            'afternoons' => $afternoons,
            'subcategories' => $subcategories,
            'allCategories' => $allCategories,
            'services' => $services,
            'currentCategory' => $currentCategory
        ]);
    }

    public function servicesFilterCategory(Request $request, $link, $category)
    {
        //$meta = $this->getMeta($link);
        $meta = new \StdClass();
        $meta->locale = LaravelLocalization::getCurrentLocale();
        $meta->language = LaravelLocalization::getCurrentLocaleName();
        $meta->languages = LaravelLocalization::getSupportedLocales();
        $meta->metas[$meta->locale] = new \StdClass();
        $meta->metas[$meta->locale]->name = 'SFC.CY';
        $metaData = ServiceMeta::where('parameter_link', $link)->where('parameter_category', $category)->where('language', $meta->locale)->first();
        if (!empty($metaData->id)) {
            $meta->metas[$meta->locale]->title = $metaData->meta_title;
            $meta->metas[$meta->locale]->description = $metaData->meta_description;
            $meta->metas[$meta->locale]->keywords = $metaData->meta_keywords;
            $meta->h1 = $metaData->page_h1;
            $meta->subtext = $metaData->page_subtitle;
            $meta->subtitle = $metaData->page_h2;
            $meta->subnote = $metaData->page_subnote;
            $meta->page_seo = $metaData->page_seo;
        }
        $cities = City::where('country_id', 55)->orderBy('population', 'desc')->orderBy('name', 'asc')->limit(7)->get()->keyBy('id');
        $subcategories = ServiceCategory::where('parent_id', '!=', 0)->count();
        $allCategories = ServiceCategory::get()->keyBy('id');
        $currentCategory = ServiceCategory::where('slug', $category)->firstOrFail();
        $parentCategory = ServiceCategory::where('slug', $link)->firstOrFail();
        $services = Service::where([
            ['categories', 'like', '%[' . $currentCategory->id . ']%'],
            ['active', 1]
        ])->orderBy('name')->paginate(20);
        $categories = ServiceCategory::where('parent_id', $currentCategory->parent_id)->orderBy('ord', 'asc')->orderBy('name', 'asc')->get();
        $afternoons = WorkingAfternoon::where('country_id', 55)->get();
        return view('services', [
            'meta' => $meta,
            'cities' => $cities,
            'afternoons' => $afternoons,
            'categories' => $categories,
            'subcategories' => $subcategories,
            'allCategories' => $allCategories,
            'services' => $services,
            'currentCategory' => $currentCategory
        ]);
    }
}
