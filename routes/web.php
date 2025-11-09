<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\CartController;

Route::get('/', fn ()=> view('home'));
Route::get('/products', [ProductsController::class, 'index'])->name('products.index');
Route::get('/my-cart', [CartController::class, 'index'])->name('cart.index');
