<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Admin\Product\BaseController;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\Tag;

class EditController extends BaseController
{
    public function __invoke(Product $product)
    {
        $categories = Category::all();
        $brands = Brand::all();
        $tags = Tag::all();
        return view('admin.product.edit-product', compact('categories', 'brands', 'tags', 'product'));
    }
}
