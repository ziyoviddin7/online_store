<?php

namespace App\Http\Controllers\Admin\CategoryTagBrand;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\NameRequest;
use App\Models\Brand;
use App\Services\Brand\Service;

class BrandController extends Controller
{
    protected $service;

    public function __construct(Service $service)
    {
        $this->service = $service;
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
        $this->service->store($data);
        return redirect()->route('admin.new_brand.index')->with('success', 'Категория успешна создана.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Brand $brand)
    {
        $products = $brand->products;
        return view('admin.category_tag_brand.brand.show-brand', compact('products', 'brand'));
    }

    public function destroy(Brand $brand)
    {
        if ($brand->products()->exists()) {
            return redirect()->route('admin.brand.index')->with('error', "Unable to delete the '{$brand->name}' brand: related products exist");
        }
        $brand->delete();
        return redirect()->route('admin.brand.index');
    }
}
