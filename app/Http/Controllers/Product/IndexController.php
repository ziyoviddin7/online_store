<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Services\Product\Service;

class IndexController extends Controller
{
    public function index()
    {
        return view('product.shop');
    }
}