<?php

use App\Http\Controllers\ListingController;
use App\Http\Controllers\WebController;
use Illuminate\Support\Facades\Route;

// Basic Routes
Route::get('/', [WebController::class, 'index'])->name('home');
Route::get('chat', [WebController::class, 'chat'])->name('chat');
Route::get('plan', [WebController::class, 'plan'])->name('plan');
Route::get('post', [WebController::class, 'post'])->name('post');
Route::get('login', [WebController::class, 'login'])->name('login');
Route::get('categories', [WebController::class, 'categories'])->name('categories');

Route::get('view-listing/{id}', [ListingController::class, 'viewListing'])->name('listing.view');