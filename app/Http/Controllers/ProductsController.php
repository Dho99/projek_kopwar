<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class ProductsController extends Controller
{

    public function list(Products $product)
    {
        return view('products.index', [
            "title" => "Products",
            "products" => $product->all()
        ]);
    }
}
