<?php

namespace App\Http\Controllers\Api\V1\CategoryTagBrand;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\NameRequest;
use App\Http\Resources\V1\Category\CategoryResource;
use App\Models\Category;
use App\Services\Category\CategoryService;
use Illuminate\Support\Facades\Cache;

class CategoryController extends Controller
{
    protected $categoryService;

    public function __construct(CategoryService $categoryService)
    {
        $this->categoryService = $categoryService;
    }

    public function index()
    {
        $categories = Cache::remember('categories:all', 3600, function () {
            return Category::all();
        });

        return CategoryResource::collection($categories);
    }
    public function store(NameRequest $name_request)
    {
        $data = $name_request->validated();
        $category = $this->categoryService->store($data);

        return new CategoryResource($category);
    }


    public function show(Category $category)
    {
        $categoryWithProducts = Cache::remember("category:{$category->id}:detail", 3600, function () use ($category) {
            return $category->load('products');
        });

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
        Cache::forget("category:{$category->id}:detail");

        return response()->json([
            "message" => "Category removed"
        ]);
    }
}
