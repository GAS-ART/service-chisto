<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\Pages;

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

Route::get('/locale/{locale}', [Controllers\ChangeLanguagesController::class, 'changeLocale'])->name('locale');
Route::post('/send-main-form', [Controllers\sendController::class, 'submit'])->name('sendMainForm');
Route::get('/sitemap', [Controllers\SitemapController::class, 'generateSitemap']);

Route::get('/', [Pages\HomeController::class, 'index'])->name('index');
Route::get('/{locale}', [Pages\HomeController::class, 'index'])->name('home');
