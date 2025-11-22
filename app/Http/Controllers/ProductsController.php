<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        return view('products.index');
    }

    public function detail($productSlug){
        return view('products.detail', ['product-slug' => $productSlug]);
    }
}
