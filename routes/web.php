<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AppController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\Auth\GoogleController;
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
    // Dashboard routes
    Route::get('/app', [AppController::class, 'index'])->name('app::index')->middleware('auth');
    Route::get('/app/profile', [AppController::class, 'profile'])->name('app::profile')->middleware('auth');
    Route::post('/app/profile/save', [ProfileController::class, 'saveProfile'])->name('app::profile::save')->middleware('auth');
    Route::post('/app/profile/avatar', [ProfileController::class, 'updateAvatar'])->name('app::profile::avatar');
    Route::get('/app/startups', [AppController::class, 'startups'])->name('app::startups')->middleware('auth');
    Route::get('/app/startups/create', [AppController::class, 'startupsCreate'])->name('app::startups::create')->middleware('auth');
    Route::get('/app/startups/edit/{id}', [AppController::class, 'startupsEdit'])->name('app::startups::edit')->middleware('auth');
    Route::get('/app/startups/delete/{id}', [AppController::class, 'startupsDelete'])->name('app::startups::delete')->middleware('auth');
    Route::post('/app/startups/save', [AppController::class, 'startupsSave'])->name('app::startups::save')->middleware('auth');
    Route::post('/app/startups/image', [AppController::class, 'startupsImage'])->name('app::startups::image');
    // API routes
    Route::prefix('api/cities')->group(function() {
        Route::get('popular/{countryCode}', [CityController::class, 'getPopularCities'])->where('countryCode', '[A-Za-z]{2}');
        Route::get('search/{countryCode}', [CityController::class, 'searchCities'])->where('countryCode', '[A-Za-z]{2}');
        Route::get('{cityId}', [CityController::class, 'getCityById'])->where('cityId', '[0-9]+');
    });
});
