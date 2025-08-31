<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AppController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\SitemapController;
use App\Http\Controllers\Auth\GoogleController;
use App\Http\Controllers\ContactController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

Route::group(['prefix' => LaravelLocalization::setLocale()], function() {
    Route::get('/', [WebController::class, 'index'])->name('web::index');
    // Authentication routes
    Route::get('/signup', [AuthController::class, 'signup'])->name('signup');
    Route::get('/login', [AuthController::class, 'signin'])->name('login');
    Route::get('/forgot', [AuthController::class, 'forgot'])->name('forgot');
    Route::post('/auth/signup', [AuthController::class, 'doSignup'])->name('auth::signup');
    Route::post('/auth/signin', [AuthController::class, 'doLogin'])->name('auth::login');
    Route::post('/auth/forgot', [AuthController::class, 'doForgot'])->name('auth::forgot');
    Route::get('/confirm/{code}', [AuthController::class, 'confirm'])->name('confirm');
    Route::get('/reset/{code}', [AuthController::class, 'reset'])->name('reset');
    Route::post('/reset/set/{code}', [AuthController::class, 'doReset'])->name('auth::reset');
    Route::get('/login/google', [GoogleController::class, 'redirectToGoogle'])->name('auth::google');
    Route::get('/login/google/callback', [GoogleController::class, 'handleGoogleCallback']);
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/terms', [WebController::class, 'terms'])->name('web::terms');
    Route::get('/privacy', [WebController::class, 'privacy'])->name('web::privacy');
    Route::get('/working-afternoons', [WebController::class, 'wa'])->name('web::wa');
    Route::get('/about', [WebController::class, 'about'])->name('web::about');
    Route::get('/partnerships', [WebController::class, 'partnerships'])->name('web::partnerships');
    Route::get('/contact', [WebController::class, 'contact'])->name('web::contact');
    Route::post('/contact', [ContactController::class, 'submit'])->name('web::contact::submit');
    Route::get('/events', [WebController::class, 'events'])->name('web::events');
    Route::get('/event/{link}', [WebController::class, 'event'])->name('web::event');
    Route::get('/events/{link}', [WebController::class, 'eventsFilter'])->name('web::events::filter');
    Route::get('/events/{link}/{category}', [WebController::class, 'eventsFilterCategory'])->name('web::events::filter::category');
    Route::get('/startups', [WebController::class, 'startups'])->name('web::startups');
    Route::get('/startup/{link}', [WebController::class, 'startup'])->name('web::startup');
    Route::get('/startups/{link}', [WebController::class, 'startupsFilter'])->name('web::startups::filter');
    Route::get('/startups/{link}/{category}', [WebController::class, 'startupsFilterCategory'])->name('web::startups::filter::category');
    // Dashboard routes
    Route::get('/app', [AppController::class, 'index'])->name('app::index')->middleware(['auth', 'last.seen']);
    Route::get('/app/profile', [AppController::class, 'profile'])->name('app::profile')->middleware(['auth', 'last.seen']);
    Route::post('/app/profile/save', [ProfileController::class, 'saveProfile'])->name('app::profile::save')->middleware(['auth', 'last.seen']);
    Route::post('/app/profile/avatar', [ProfileController::class, 'updateAvatar'])->name('app::profile::avatar');
    Route::get('/app/startups', [AppController::class, 'startups'])->name('app::startups')->middleware(['auth', 'last.seen']);
    Route::get('/app/startups/create', [AppController::class, 'startupsCreate'])->name('app::startups::create')->middleware(['auth', 'last.seen']);
    Route::get('/app/startups/edit/{id}', [AppController::class, 'startupsEdit'])->name('app::startups::edit')->middleware(['auth', 'last.seen']);
    Route::get('/app/startups/delete/{id}', [AppController::class, 'startupsDelete'])->name('app::startups::delete')->middleware(['auth', 'last.seen']);
    Route::post('/app/startups/save', [AppController::class, 'startupsSave'])->name('app::startups::save')->middleware(['auth', 'last.seen']);
    Route::post('/app/startups/image', [AppController::class, 'startupsImage'])->name('app::startups::image');
    Route::get('/app/business', [AppController::class, 'business'])->name('app::business')->middleware(['auth', 'last.seen']);
    Route::get('/app/business/create', [AppController::class, 'businessCreate'])->name('app::business::create')->middleware(['auth', 'last.seen']);
    Route::get('/app/business/edit/{id}', [AppController::class, 'businessEdit'])->name('app::business::edit')->middleware(['auth', 'last.seen']);
    Route::get('/app/business/delete/{id}', [AppController::class, 'businessDelete'])->name('app::business::delete')->middleware(['auth', 'last.seen']);
    Route::post('/app/business/save', [AppController::class, 'businessSave'])->name('app::business::save')->middleware(['auth', 'last.seen']);
    Route::post('/app/business/image', [AppController::class, 'businessImage'])->name('app::business::image');
    Route::get('/app/events', [AppController::class, 'events'])->name('app::events')->middleware(['auth', 'last.seen']);
    Route::get('/app/events/create', [AppController::class, 'eventsCreate'])->name('app::events::create')->middleware(['auth', 'last.seen']);
    Route::get('/app/events/edit/{id}', [AppController::class, 'eventsEdit'])->name('app::events::edit')->middleware(['auth', 'last.seen']);
    Route::get('/app/events/delete/{id}', [AppController::class, 'eventsDelete'])->name('app::events::delete')->middleware(['auth', 'last.seen']);
    Route::post('/app/events/save', [AppController::class, 'eventsSave'])->name('app::events::save')->middleware(['auth', 'last.seen']);
    Route::post('/app/events/image', [AppController::class, 'eventsImage'])->name('app::events::image');
    Route::get('/app/services', [AppController::class, 'services'])->name('app::services')->middleware(['auth', 'last.seen']);
    Route::get('/app/services/create', [AppController::class, 'servicesCreate'])->name('app::services::create')->middleware(['auth', 'last.seen']);
    Route::get('/app/services/edit/{id}', [AppController::class, 'servicesEdit'])->name('app::services::edit')->middleware(['auth', 'last.seen']);
    Route::get('/app/services/delete/{id}', [AppController::class, 'servicesDelete'])->name('app::services::delete')->middleware(['auth', 'last.seen']);
    Route::post('/app/services/save', [AppController::class, 'servicesSave'])->name('app::services::save')->middleware(['auth', 'last.seen']);
    Route::post('/app/services/image', [AppController::class, 'servicesImage'])->name('app::services::image');
    Route::get('/app/community', [AppController::class, 'community'])->name('app::community')->middleware(['auth', 'last.seen']);
    Route::get('/app/u/{nickname}', [AppController::class, 'user'])->name('app::user')->middleware(['auth', 'last.seen']);
    // API routes
    Route::prefix('api/cities')->group(function() {
        Route::get('popular/{countryCode}', [CityController::class, 'getPopularCities'])->where('countryCode', '[A-Za-z]{2}');
        Route::get('search/{countryCode}', [CityController::class, 'searchCities'])->where('countryCode', '[A-Za-z]{2}');
        Route::get('{cityId}', [CityController::class, 'getCityById'])->where('cityId', '[0-9]+');
    });
});
Route::get('/sitemap.xml', [SitemapController::class, 'sitemap'])->name('sitemap');
Route::get('/sitemap-{language}.xml', [SitemapController::class, 'sitemapMain'])->name('sitemap::main');
