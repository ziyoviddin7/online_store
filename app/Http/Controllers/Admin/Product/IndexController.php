<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Admin\Product\BaseController;
use App\Models\Product;

class IndexController extends BaseController
{
    public function __invoke()
    {
        $products = Product::all();
        return view('admin.product.product-list', compact('products'));
    }
}
