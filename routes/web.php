<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\AnalyzeController;

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

Route::get('/', function () {
    return view('pages.homepage');
})->name('homepage');


Route::post('language-switch', [LanguageController::class, 'switch'])->name('language.switch');

Route::get('about', function () {
    return view('pages.about');
})->name('about');

Route::get('services', function () {
    return view('pages.services');
})->name('services');

Route::get('cgv', function () {
    return view('pages.cgv');
})->name('cgv');

Route::get('legal-notices', function () {
    return view('pages.legal-notices');
})->name('legal-notices');

Route::get('privacy', function () {
    return view('pages.privacy');
})->name('privacy');

Route::get('rgpd', function () {
    return view('pages.rgpd');
})->name('rgpd');

Route::get('/analyze/result', [AnalyzeController::class, 'show'])->name('analyze.result');

require __DIR__.'/auth.php';
