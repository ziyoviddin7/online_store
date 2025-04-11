<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Support\Facades\Cache;

class HomeController extends Controller
{
    public function index()
    {
        $products = Cache:: remember('home_products:all', 3600, function() {
            return Product::all();
        });
        $favorites_session = session()->get('favorites', []);
        return view('home', compact('products', 'favorites_session'));
    }
}
