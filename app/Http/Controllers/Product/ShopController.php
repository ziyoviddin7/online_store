<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Tag;

class ShopController extends Controller
{
    public function __invoke()
    {
        $products = Product::all();
        $tags = Tag::all();
        return view('product.shop', compact('products', 'tags'));
    }
}