<?php

use App\Http\Controllers\Front\WebsiteController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/**
 * front routes
 */
Route::prefix('/')->name('front.')->group(function () {
    //=======================WEBSITES PAGES=======================
    Route::get('{slug?}', [WebsiteController::class, 'index'])->name('pages');

    //=======================HOME PAGE=======================
    // Route::get('', function () {
    //     return view('front.pages.index');
    // })->name('index');
    // //=======================ABOUT PAGE=======================
    // Route::get('about', function () {
    //     return view('front.pages.about');
    // })->name('about');
    // //=======================CONTACT PAGE=======================
    // Route::get('contact', function () {
    //     return view('front.pages.contact');
    // })->name('contact');
    // //=======================PROJECTS PAGE=======================
    // Route::get('projects', function () {
    //     return view('front.pages.projects');
    // })->name('projects');
    // //=======================SERVICES PAGE=======================
    // Route::get('services', function () {
    //     return view('front.pages.services');
    // })->name('services');

});
