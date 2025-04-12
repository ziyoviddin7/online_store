<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;


class ShopController extends Controller
{
    public function __invoke()
    {
        return view('product.shop');
    }
}