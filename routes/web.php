<?php

use App\Http\Controllers\AdController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ListingController;
use App\Http\Controllers\RequestController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WebController;
use Faker\Provider\ar_EG\Payment;
use Illuminate\Support\Facades\Route;

//home
Route::get('/', [WebController::class, 'index'])->name('home');

//guest route
//User Management
Route::post('google-auth', [UserController::class, 'googleAuthenticate'])->name('google.auth');
Route::get('login', [WebController::class, 'login'])->name('login');

Route::get('agent', [WebController::class, 'agent'])->name('agent.index');
Route::get('register', [WebController::class, 'register'])->name('register');
Route::post('register/store', [UserController::class, 'registerUser'])->name('register.store');
Route::post('login/user', [UserController::class, 'authenticateUser'])->name('authenticate.user');
Route::post('logout', [UserController::class, 'logout'])->name('logout');

Route::get('/loading', function () {
    return view('loading');
})->name('loading');

//Listing Routes
Route::name('listing.')->prefix('listing')->group(function () {
    Route::get('post', [WebController::class, 'post'])->name('post');
    Route::get('post/type/{category}', [ListingController::class, 'postCategoriesTypes'])->name('types');
    Route::get('post/type/{category}/{categoryType}', [ListingController::class, 'postForm'])->name('form');
    Route::post('post/store', [ListingController::class, 'storePropertyListing'])->name('store');
});

Route::get('view-listing/{id}', [ListingController::class, 'viewListing'])->name('listing.view');
Route::get('search', [ListingController::class, 'searchListings'])->name('listing.search');


//Jobs Section
Route::prefix('jobs')->name('jobs.')->group(function () {
    Route::get('/', [WebController::class, 'jobs'])->name('list');
    Route::get('form/{category}', [WebController::class, 'jobsForm'])->name('form');
    Route::post('store', [RequestController::class, 'jobsStore'])->name('store');
});


//plans
Route::name('plans.')->group(function () {
    Route::view('plan', 'plans.index')->name('index');
    Route::view('plan-buyer', 'plans.buyer')->name('buyer');
    Route::view('plan-seller', 'plans.seller')->name('seller');
    Route::view('plan-ads', 'plans.ads')->name('ads');
});

Route::get('categories', [WebController::class, 'categories'])->name('categories');

Route::get('properties', [WebController::class, 'properties'])->name('properties');


Route::post('payment/show', [WebController::class, 'showScanner'])->name('payment.show');


// API
Route::get('cities/by/state', [WebController::class, 'citiesByState'])->name('cities.by.state');

// User Must be authenticated and has role of user or admin
Route::middleware('checkUser')->group(function () {
    Route::get('my-listings', [ListingController::class, 'getUserListing'])->name('my-listings');

    //Listing Routes Was Here

    //Property Request Routes (Initially Was On Guests)
    Route::get('properties-form/{location}', [WebController::class, 'propertiesForm'])->name('properties.form');
    Route::post('properties-form-store', [RequestController::class, 'propertiesFormSave'])->name('properties.form.store');
    Route::get('properties/show/{location}', [WebController::class, 'showProperties'])->name('properties.show');

    // Payment page
    Route::get('reset-password', [WebController::class, 'resetPassword'])->name('password.reset');


});


Route::get('admin/ads/list', [AdController::class, 'getAllAds'])->name('admin.ads.list');


Route::middleware('checkAdmin')->group(function () {

    Route::get('admin', [AdminController::class, 'index'])->name('admin.index');
    Route::get('admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');

    Route::name('admin.requests.')->prefix('admin/requests')->group(function () {
        // Requests Form Section
        Route::get('/', [RequestController::class, 'showRequests'])->name('list');
        Route::get('jobs', [RequestController::class, 'indexJobs'])->name('jobs.list');
        Route::get('jobs/{id}', [RequestController::class, 'viewJob'])->name('jobs.view');
        Route::get('properties', [RequestController::class, 'indexProperties'])->name('properties.list');
        Route::get('properties/{id}', [RequestController::class, 'viewProperty'])->name('properties.view');
        // Requests Form Section
    });

    Route::name('admin.listings.')->prefix('admin/listings')->group(function () {
        Route::get('/', [ListingController::class, 'searchListingsAdmin'])->name('list');
        Route::get('show/{id}', [ListingController::class, 'showListingsAdmin'])->name('show');
        Route::post('delete', [ListingController::class, 'deleteListingsAdmin'])->name('delete');
        Route::post('disable', [ListingController::class, 'disableListingsAdmin'])->name('disable');
        Route::post('enable', [ListingController::class, 'enableListingsAdmin'])->name('enable');

    });
});
