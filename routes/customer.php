<?php 

use App\Http\Controllers\Customer\ReportController;
use App\Http\Controllers\Customer\ProfileController;
use App\Http\Controllers\Customer\CheckoutController;
use App\Http\Controllers\Customer\DashboardController;
use App\Http\Controllers\Customer\BillingPortalController;

Route::group(['prefix' => 'dashboard', 'middleware' => ['auth:customer']], function() {
    Route::get('', function () {
      return redirect()->route('customer.dashboard.index');
    })
    ->name('customer.redirect');
    
    Route::get('', [DashboardController::class, 'index'])
    ->name('customer.dashboard.index');
    

    Route::group(['prefix' => 'profile'], function() {
      Route::get('', [ProfileController::class, 'edit'])->name('customer.dashboard.profile.index');
      Route::patch('', [ProfileController::class, 'update'])->name('customer.dashboard.profile.update');
      Route::delete('', [ProfileController::class, 'destroy'])->name('customer.dashboard.profile.destroy');
    });

    Route::group(['prefix' => 'reports'], function() {
      Route::get('', [ReportController::class, 'index'])
      ->name('customer.dashboard.reports.index');
    });
    
    Route::post('/checkout/session', [CheckoutController::class, 'checkout'])->name('checkout.session');
    Route::post('/billing/createSession', [BillingPortalController::class, 'createSession'])->name('billing.createSession');
});

<<<<<<< Updated upstream
Route::get('/checkout/success', function() {
  return view('pages.checkout.success');
})->name('checkout.success');
=======

>>>>>>> Stashed changes
