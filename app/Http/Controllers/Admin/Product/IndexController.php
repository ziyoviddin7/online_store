<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Admin\Product\BaseController;

class IndexController extends BaseController
{
    public function __invoke()
    {
        return view('admin.product-list');
    }
}
