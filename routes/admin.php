<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\DashboardController;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::group(['prefix' => env('ADMIN_URL', 'localhost'), 'middleware' => ['auth:admin']], function() {
  Route::get('dashboard', [DashboardController::class, 'index'])
  ->name('admin.dashboard'); 
});