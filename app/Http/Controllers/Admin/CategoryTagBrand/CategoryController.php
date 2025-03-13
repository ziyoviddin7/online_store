<?php

namespace App\Http\Controllers\Admin\CategoryTagBrand;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\NameRequest;
use App\Models\Category;
use App\Services\Category\Service;

class CategoryController extends Controller
{
    protected $service;

    public function __construct(Service $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        $categories = Category::all();
        return view('admin.category_tag_brand.category.category-list', compact('categories'));
    }

    public function create()
    {
        return view('admin.category_tag_brand.category.new-category');
    }

    public function store(NameRequest $name_request)
    {
        $data = $name_request->validated();
        $this->service->store($data);
        return redirect()->route('admin.category.index')->with('success', 'Категория успешна создана.');
    }


    public function show(Category $category)
    {
        $products = $category->products;
        return view('admin.category_tag_brand.category.show-category', compact('products', 'category'));
    }

    public function destroy(Category $category)
    {
        if ($category->products()->exists()) {
            return redirect()->route('admin.category.index')->with('error', "Unable to delete the '{$category->name}' category: related products exist");
        }
        $category->delete();
        return redirect()->route('admin.category.index');
    }
}
