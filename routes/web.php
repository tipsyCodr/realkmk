<?php

use App\Http\Controllers\ListingController;
use App\Http\Controllers\RequestController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WebController;
use Illuminate\Support\Facades\Route;

// Basic Routes
Route::get('/', [WebController::class, 'index'])->name('home');
Route::get('chat', [WebController::class, 'chat'])->name('chat');

//User Management
Route::get('login', [WebController::class, 'login'])->name('login');
Route::get('register', [WebController::class, 'register'])->name('register');
Route::post('register/store', [UserController::class, 'registerUser'])->name('register.store');
Route::post('login/user', [UserController::class, 'authenticateUser'])->name('authenticate.user');
Route::post('logout', [UserController::class, 'logout'])->name('logout');

Route::post('payment/show', [WebController::class, 'showScanner'])->name('payment.show');

Route::get('reset-password', [WebController::class, 'resetPassword'])->name('password.reset');

Route::name('listing.')->prefix('listing')->group(function () {
    Route::get('post', [WebController::class, 'post'])->name('post');
    Route::get('post/type/{category}', [ListingController::class, 'postCategoriesTypes'])->name('types');
    Route::get('post/{categoryType}', [ListingController::class, 'postForm'])->name('form');
    Route::post('post/store', [ListingController::class, 'storePropertyListing'])->name('store');
});

Route::get('login', [WebController::class, 'login'])->name('login');
Route::get('categories', [WebController::class, 'categories'])->name('categories');

Route::get('properties', [WebController::class, 'properties'])->name('properties');
Route::get('properties-form/{location}', [WebController::class, 'propertiesForm'])->name('properties.form');
Route::post('properties-form-store', [RequestController::class, 'propertiesFormSave'])->name('properties.form.store');
Route::get('properties/show/{location}', [WebController::class, 'showProperties'])->name('properties.show');


Route::name('admin.requests.')->prefix('admin/requests')->group(function () {
    Route::get('/', [RequestController::class, 'showRequests'])->name('list');
    Route::get('jobs', [RequestController::class, 'indexJobs'])->name('jobs.list');
    Route::get('jobs/{id}', [RequestController::class, 'viewJob'])->name('jobs.view');
    Route::get('properties', [RequestController::class, 'indexProperties'])->name('properties.list');
    Route::get('properties/{id}', [RequestController::class, 'viewProperty'])->name('properties.view');
});

Route::get('view-listing/{id}', [ListingController::class, 'viewListing'])->name('listing.view');
Route::get('search', [ListingController::class, 'searchListings'])->name('listing.search');

//Jobs Section
Route::prefix('jobs')->name('jobs.')->group(function () {
    Route::get('/', [WebController::class, 'jobs'])->name('list');
    Route::get('form/{category}', [WebController::class, 'jobsForm'])->name('form');
    Route::post('store', [RequestController::class, 'jobsStore'])->name('store');
});

Route::name('plans.')->group(function () {
    Route::view('plan', 'plans.index')->name('index');
    Route::view('plan-buyer', 'plans.buyer')->name('buyer');
    Route::view('plan-seller', 'plans.seller')->name('seller');
    Route::view('plan-ads', 'plans.ads')->name('ads');
});

// API
Route::get('cities/by/state', [WebController::class, 'citiesByState'])->name('cities.by.state');
