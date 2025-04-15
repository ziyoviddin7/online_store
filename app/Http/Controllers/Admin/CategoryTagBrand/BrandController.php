<?php

namespace App\Http\Controllers\Admin\CategoryTagBrand;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\NameRequest;
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
        $brands = Brand::all();
        return view('admin.category_tag_brand.brand.brand-list', compact('brands'));
    }

    public function create()
    {
        return view('admin.category_tag_brand.brand.new-brand'); 
    }

    public function store(NameRequest $name_request)
    {
        $data = $name_request->validated();
        $this->brandService->store($data);
        return redirect()->route('admin.brand.index')->with('success', 'Категория успешна создана.');
    }

    public function show(Brand $brand)
    {
        $products = $brand->products()->paginate(15);
        return view('admin.category_tag_brand.brand.show-brand', compact('products', 'brand'));
    }

    public function destroy(Brand $brand)
    {
        if ($brand->products()->exists()) {
            return redirect()->route('admin.brand.index')->with('error', "Unable to delete the '{$brand->name}' brand: related products exist");
        }
        $brand->delete();
        Cache::forget("brand:{$brand->id}:detail");
        
        return redirect()->route('admin.brand.index');
    }
}
