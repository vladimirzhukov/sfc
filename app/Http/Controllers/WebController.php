<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\EventMeta;
use App\Models\Startup;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Meta;
use App\Models\PageContent;
use App\Models\City;
use App\Models\WorkingAfternoon;
use App\Models\EventCategory;
use App\Models\StartupCategory;
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
        $meta = $this->getMeta();
        $cities = City::where('country_id', 55)->orderBy('population', 'desc')->orderBy('name', 'asc')->limit(7)->get()->keyBy('id');
        $afternoons = WorkingAfternoon::where('country_id', 55)->get();
        $allCategories = EventCategory::get()->keyBy('id');
        $relatedEvents = Event::where([
            ['id', '!=', $event->id],
            //['start_date', '>=', date('Y-m-d')],
            ['active', 1]
        ])->orderBy('start_date')->orderBy('name')->limit(5)->get();
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
        /*$cities = City::where('country_id', 55)->get();
        foreach ($cities as $key => $city) {
            echo $city->name . (!empty($city->region->name) ? ' (' . $city->region->name . ')' : '') . ' - "parameter_link": ' . $city->slug . '<br>';
            if (!empty($key) && $key % 10 == 0) {
                echo '<hr>';
            }
        }*/
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
        $meta = $this->getMeta();
        $cities = City::where('country_id', 55)->orderBy('population', 'desc')->orderBy('name', 'asc')->limit(7)->get()->keyBy('id');
        $categories = StartupCategory::where('parent_id', 0)->orderBy('ord', 'asc')->orderBy('name', 'asc')->get();
        $subcategories = StartupCategory::where('parent_id', '!=', 0)->count();
        $allCategories = StartupCategory::get()->keyBy('id');
        $startups = Startup::where('active', 1)->orderBy('name')->paginate(20);
        $afternoons = WorkingAfternoon::where('country_id', 55)->get();
        $meta->subtitle = __('Cyprus Startups');
        $meta->subnote = __('web.startups_1');
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
        $meta = $this->getMeta($link);
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
                $meta->subtitle = __('Online Startup Events');
                $meta->subnote = __('web.events_3');
            } elseif ($link == 'recent') {
                $startups = Startup::where('active', 1)->orderBy('id', 'desc')->orderBy('name')->paginate(20);
                $meta->subtitle = __('Past Startup Events');
                $meta->subnote = __('web.events_4');
            } elseif ($link == 'cities') {
                $startups = null;
                $meta->subtitle = __('Startup Events in Cities');
                $meta->subnote = __('web.events_6');
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
                $meta->subtitle = __('Cyprus Startup Events');
                $meta->subnote = __('web.events_1') . ' ' . $currentCategory->name;
            } else {
                $currentCity = City::where('slug', $link)->firstOrFail();
                $startups = Startup::where([
                    ['city_id', $currentCity->id],
                    ['active', 1]
                ])->orderBy('name')->paginate(20);
                $currentCategory = null;
                $meta->subtitle = __('Startup Events in') . ' ' . $currentCity->name;
                $meta->subnote = __('web.events_7') . ' ' . $currentCity->name;
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
        $meta = $this->getMeta($link);
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
        $meta->subtitle = __('Cyprus Startup Events');
        $meta->subnote = __('web.events_1') . ' ' . $currentCategory->name;
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
}
