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

Route::prefix('/{locale}/dry-cleaning')->name('dry-cleaning.')->group(function () {
  Route::get('', [Pages\DryCleaningController::class, 'index'])->name('index');
  Route::get('furniture', [Pages\DryCleaningController::class, 'furniture'])->name('furniture');
  Route::get('carpet', [Pages\DryCleaningController::class, 'carpet'])->name('carpet');
  Route::get('floor', [Pages\DryCleaningController::class, 'floor'])->name('floor');
});

Route::prefix('/{locale}/window-cleaning')->name('window-cleaning.')->group(function () {
    Route::get('', [Pages\WindowCleaningController::class, 'index'])->name('index');
    Route::get('washing-windows-and-facades', [Pages\WindowCleaningController::class, 'facades'])->name('facades');
    Route::get('house', [Pages\WindowCleaningController::class, 'house'])->name('house');
    Route::get('after-renovation', [Pages\WindowCleaningController::class, 'renovation'])->name('renovation');
});

Route::prefix('/{locale}/spring-cleaning')->name('spring-cleaning.')->group(function () {
    Route::get('', [Pages\SpringCleaningController::class, 'index'])->name('index');
    Route::get('apartment', [Pages\SpringCleaningController::class, 'apartment'])->name('apartment');
    Route::get('restaurants-and-shops', [Pages\SpringCleaningController::class, 'restaurants'])->name('restaurants');
    Route::get('offices', [Pages\SpringCleaningController::class, 'offices'])->name('offices');
    Route::get('industrial-premises', [Pages\SpringCleaningController::class, 'industrial'])->name('industrial');
});

Route::prefix('/{locale}/cleaning-after-renovation')->name('renovation.')->group(function () {
  Route::get('', [Pages\RenavationController::class, 'index'])->name('index');
  Route::get('apartment-and-houses', [Pages\RenavationController::class, 'apartment'])->name('apartment');
  Route::get('offices', [Pages\RenavationController::class, 'offices'])->name('offices');
  Route::get('Industrial-premises', [Pages\RenavationController::class, 'industrial'])->name('industrial');
});

Route::prefix('/{locale}/extreme-cleaning')->name('extreme.')->group(function () {
  Route::get('after-fire', [Pages\ExtremeCleaningController::class, 'fire'])->name('fire');
  Route::get('other-cases', [Pages\ExtremeCleaningController::class, 'cases'])->name('cases');
});