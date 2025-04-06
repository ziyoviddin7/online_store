<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;

class HomeController extends Controller
{
    public function index()
    {
        $products = Product::all();
        $favorites_session = session()->get('favorites', []);
        return view('home', compact('products', 'favorites_session'));
    }
}
