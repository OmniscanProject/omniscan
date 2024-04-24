<?php 

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\BillingPortalController;

Route::group(['prefix' => 'dashboard', 'middleware' => ['auth:customer']], function() {
    Route::get('', function () {
        return view('dashboards.customer.dashboard');
    });

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    Route::post('/checkout/session', [CheckoutController::class, 'checkout'])->name('checkout.session');
    Route::get('/checkout/success', [CheckoutController::class, 'checkoutSuccess'])->name('checkout.success');
    Route::post('/billing/createSession', [BillingPortalController::class, 'createSession'])->name('billing.createSession');
});

