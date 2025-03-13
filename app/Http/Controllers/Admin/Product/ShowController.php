<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Admin\Product\BaseController;
use App\Models\Product;

class ShowController extends BaseController
{
    public function __invoke(Product $product)
    {
        return view('admin.product.product-detail', compact('product'));
    }
}
