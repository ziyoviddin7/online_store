<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Tag;

class DetailController extends Controller
{
    public function __invoke(Product $product)
    {
        $products = Product::all();
        return view('product.product-detail', compact('product', 'products'));
    }
}