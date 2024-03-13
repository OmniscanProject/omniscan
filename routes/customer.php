<?php 

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CheckoutController;

Route::middleware('auth:customer')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::post('/checkout/session', [CheckoutController::class, 'checkout'])->name('checkout.session');
    Route::get('/checkout/success', [CheckoutController::class, 'checkoutSuccess'])->name('checkoutSucess');
});

Route::middleware('auth:admin')->group(function () {
    
});