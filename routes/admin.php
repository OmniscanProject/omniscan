<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\ConfigController;
use App\Http\Controllers\Admin\ScriptController;
use App\Http\Controllers\Admin\InvoiceController;
use App\Http\Controllers\Admin\CustomerController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\SubscriptionController;

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
  ->name('admin.dashboard.index');

  Route::group(['prefix' => 'dashboard'], function() {
    Route::group(['prefix' => 'sales'], function() {
      Route::get('subscriptions', [SubscriptionController::class, 'index'])
      ->name('admin.dashboard.sales.subscription');

      Route::get('invoices', [InvoiceController::class, 'index'])
      ->name('admin.dashboard.sales.invoice');
    });

    Route::group(['prefix' => 'customers'], function() {
      Route::get('', [CustomerController::class, 'index'])
      ->name('admin.dashboard.customers.index');
    });

    Route::group(['prefix' => 'scripts'], function() {
      Route::get('', [ScriptController::class, 'index'])
      ->name('admin.dashboard.scripts.index');
    });

    Route::group(['prefix' => 'config'], function() {
      Route::get('', [ConfigController::class, 'index'])
      ->name('admin.dashboard.config.index');
    });

    Route::group(['prefix' => 'users'], function() {
      Route::get('', [UserController::class, 'index'])
      ->name('admin.dashboard.users.index');
    });
  }); 

});