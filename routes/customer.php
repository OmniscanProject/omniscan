<?php 

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\BillingPortalController;

Route::middleware('auth:customer')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    Route::post('/checkout/session', [CheckoutController::class, 'checkout'])->name('checkout.session');
    Route::get('/checkout/success', [CheckoutController::class, 'checkoutSuccess'])->name('checkoutSucess');
    Route::post('/billing/createSession', [BillingPortalController::class, 'createSession'])->name('billing.createSession');
});

Route::middleware('auth:admin')->group(function () {
    
});