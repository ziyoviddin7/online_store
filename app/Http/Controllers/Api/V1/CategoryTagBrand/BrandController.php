<?php

namespace App\Http\Controllers\Api\V1\CategoryTagBrand;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\NameRequest;
use App\Http\Resources\V1\Brand\BrandResource;
use App\Models\Brand;
use App\Services\Brand\BrandService;
use Illuminate\Support\Facades\Cache;


class BrandController extends Controller
{
    protected $brandService;

    public function __construct(BrandService $brandService)
    {
        $this->brandService = $brandService;
    }

    public function index()
    {
        $brands = Cache::remember('brands:all', 3600, function () {
            return Brand::all();
        });
        return BrandResource::collection($brands);
    }

    public function store(NameRequest $name_request)
    {
        $data = $name_request->validated();
        $brand = $this->brandService->store($data);
        return new BrandResource($brand);
    }

    public function show(Brand $brand)
    {
        $brandWithProducts = Cache::remember("brand:{$brand->id}:detail", 3600, function () use ($brand) {
            return $brand->load('products');
        });

        return new BrandResource($brandWithProducts);
    }

    public function destroy(Brand $brand)
    {
        if ($brand->products()->exists()) {
            return response()->json([
                "error" => "Unable to delete the '{$brand->name}' brand: related products exist"
            ]);
        }

        $brand->delete();
        Cache::forget("brand:{$brand->id}:detail");
        
        return response()->json([
            "message" => "Brand removed"
        ]);
    }
}
