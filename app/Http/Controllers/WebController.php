<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Meta;
use App\Models\PageContent;
use App\Models\City;
use App\Models\WorkingAfternoon;
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
}
