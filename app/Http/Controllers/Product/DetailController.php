<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Models\Product;

class DetailController extends Controller
{
    public function __invoke(Product $product)
    {
        $products = Product::all();
        $favorites = session()->get('favorites', []);
        $favorites_session = session()->get('favorites', []);
        return view('product.product-detail', compact('product', 'products', 'favorites', 'favorites_session'));
    }
}