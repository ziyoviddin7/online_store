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
        $favorites = session()->get('favorites', []);
        return view('product.product-detail', compact('product', 'products', 'favorites'));
    }
}