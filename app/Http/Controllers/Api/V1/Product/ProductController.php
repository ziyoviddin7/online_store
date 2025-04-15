<?php

namespace App\Http\Controllers\Api\V1\Product;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Product\StoreRequest;
use App\Http\Requests\Api\Product\ApiUpdateRequest;
use App\Http\Resources\V1\Product\ProductResource;
use App\Models\Product;

use App\Services\Product\Service as ProductService; 
use Illuminate\Support\Facades\Cache;

class ProductController extends Controller
{
    protected $productService;

    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }

    public function index()
    {
        $products = Cache:: remember('products:all', 3600, function() {
            return Product::all();
        });

        return ProductResource::collection($products);
    }

    public function store(StoreRequest $storeRequest)
    {
        $data = $storeRequest->validated();
        $product = $this->productService->store($data);

        return new ProductResource($product);
    }

    public function edit(ApiUpdateRequest $apiUpdateRequest, Product $product)
    {
        $data = $apiUpdateRequest->validated();

        $product = $this->productService->update($product, $data);

        return new ProductResource($product);;
    }

    public function show(Product $product)
    {
        $product = Cache::remember("product_detail:{$product->id}:detail", 3600, function() use ($product) {
            return $product;
        });
        return new ProductResource($product);
    }

    public function destroy(Product $product)
    {
        $product->tags()->detach();

        $product->delete();
        return response()->json([
            "message" => "Product '{$product->name}' deleted"
        ]);
    }
}
