<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Admin\Product\BaseController;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Tag;

class CreateController extends BaseController
{
    public function __invoke()
    {
        $categories = Category::all();
        $brands = Brand::all();
        $tags = Tag::all();
        return view('admin.create-product', compact('categories', 'brands', 'tags'));
    }
}
