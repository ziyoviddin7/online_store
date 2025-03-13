<?php


namespace App\Services\Brand;

use App\Models\Brand;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;

class Service
{
    public function store($data)
    {
        Brand::create($data);
    }

    public function update($task, $data)
    {
    }
}