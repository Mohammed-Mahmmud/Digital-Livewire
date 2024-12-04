<?php

use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\DashboardController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Dashboard Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::prefix('admin')->name('admin.')->group(function () {
    Route::middleware('admin')->group(function () {
        Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::view('settings', 'dashboard.pages.settings.view')->name('settings');
        Route::view('skills', 'dashboard.pages.skills.index')->name('skills');
        Route::view('subscribes', 'dashboard.pages.subscribes.index')->name('subscribes');
        Route::view('counters', 'dashboard.pages.counters.index')->name('counters');
        Route::view('services', 'dashboard.pages.services.index')->name('services');
        Route::view('messages', 'dashboard.pages.messages.index')->name('messages');
        Route::view('categories', 'dashboard.pages.categories.index')->name('categories');
        Route::view('projects', 'dashboard.pages.projects.index')->name('projects');
    });
    Route::view('login', 'dashboard.auth.pages.login')
        ->middleware('guest:admin')->name('login');
});
