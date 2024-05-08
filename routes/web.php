<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnalyzeController;
use App\Http\Controllers\LanguageController;

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

Route::post('/analyze', [AnalyzeController::class, 'analyze'])->name('analyze');


Route::get('/about', function () {
    return view('pages.about');
})->name('about');

Route::get('/legal-notices', function () {
    return view('pages.legal-notices');
})->name('legal-notices');

Route::get('/cgv', function () {
    return view('pages.cgv');
})->name('cgv');

Route::get('/privacy', function () {
    return view('pages.privacy');
})->name('privacy');

Route::post('language-switch', [LanguageController::class, 'switch'])->name('language.switch');

require __DIR__.'/auth.php';
