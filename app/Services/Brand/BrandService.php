<?php


namespace App\Services\Brand;

use App\Models\Brand;

class BrandService
{
    public function store($data)
    {
        return Brand::create($data);
    }
}