<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Support\Facades\Cache;

class DetailController extends Controller
{
    public function __invoke(Product $product)
    {
        $products = Product::all();
        $favorites = session()->get('favorites', []);
        $favorites_session = session()->get('favorites', []);

        $product = Cache::remember("product_detail:{$product->id}:detail", 3600, function() use ($product) {
            return $product;
        });
        return view('product.product-detail', compact('product', 'products', 'favorites', 'favorites_session'));
    }
}