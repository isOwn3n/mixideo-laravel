<?php

use App\Http\Controllers\Cart\CartController;
use App\Http\Controllers\Cart\CheckoutController;
use App\Http\Controllers\MainPageController;
// use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
    Route::post('/cart/', [CartController::class, 'add_item'])->name('cart.add_item');
    Route::delete('/cart/', [CartController::class, 'delete_item'])->name('cart.delete_item');

    // TODO: Add it to a group
    Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout.index');
    Route::get('/checkout/validate', [CheckoutController::class, 'last_step'])->name('checkout.last_step');
    Route::post('/checkout', [CheckoutController::class, 'add_address'])->name('checkout.add_address');
    Route::post('/checkout/pay', [CheckoutController::class, 'payment'])->name('checkout.payment');

    Route::get('', [MainPageController::class, 'index'])->name('index');
});

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__ . '/auth.php';
