<?php

namespace App\Http\Controllers\Api\V1\CategoryTagBrand;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\NameRequest;
use App\Http\Resources\V1\Category\CategoryResource;
use App\Models\Category;
use App\Services\Category\CategoryService;

class CategoryController extends Controller
{
    protected $categoryService;

    public function __construct(CategoryService $categoryService)
    {
        $this->categoryService = $categoryService;
    }

    public function index()
    {
        return CategoryResource::collection(Category::all());
    }

    public function store(NameRequest $name_request)
    {
        $data = $name_request->validated();
        $category = $this->categoryService->store($data);
        
        return new CategoryResource($category);
    }


    public function show(Category $category)
    {
        $categoryWithProducts = $category->load('products');

        return new CategoryResource($categoryWithProducts);
    }

    public function destroy(Category $category)
    {
        if ($category->products()->exists()) {
            return response()->json([
                "error" => "Unable to delete the '{$category->name}' category: related products exist"
            ]);
        }
        $category->delete();
        
        return response()->json([
            "message" => "Category removed"
        ]);
    }
}
