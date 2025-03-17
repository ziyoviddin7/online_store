<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Tag;
use App\Services\Product\Service;

class IndexController extends Controller
{
    public function index()
    {
        $products = Product::all();
        $tags = Tag::all();
        return view('product.shop', compact('products', 'tags'));
    }
}