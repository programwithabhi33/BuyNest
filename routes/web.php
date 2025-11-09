<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;

Route::get('/', fn ()=> view('home'));
Route::get('/products', [ProductsController::class, 'index'])->name('products.index');
