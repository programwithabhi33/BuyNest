<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\OrderController;

Route::get('/', fn ()=> view('home'));

Route::prefix('products')->group(function () {
    Route::get('/', [ProductsController::class, 'index'])->name('products.index');
    Route::get('/{productSlug}', [ProductsController::class, 'detail'])->name('products.detail');
});

Route::get('/my-cart', [CartController::class, 'index'])->name('cart.index');
Route::get('/my-orders', [OrderController::class, 'index'])->name('orders.index');
Route::get('/login', [AuthController::class, 'loginView'])->name('login.view');
Route::get('/register', [AuthController::class, 'registerView'])->name('register.view');
