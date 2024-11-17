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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// require __DIR__.'/auth.php';
/**
 * front routes
 */
Route::prefix('/')->name('front.')->group(function () {
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
    //=======================WEBSITES PAGES=======================
    Route::get('{slug?}/{subSlug?}', [WebsiteController::class, 'index'])->name('pages');
});
