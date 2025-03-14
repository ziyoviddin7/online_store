<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Admin\Product\BaseController;

use App\Models\Product;

class DestroyController extends BaseController
{
    public function __invoke(Product $product)
    {
        $product->tags()->detach();

        $product->delete();
        return redirect()->route('admin.product_list');
    }
}
