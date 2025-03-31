<?php


namespace App\Services\Category;

use App\Models\Category;

class CategoryService
{
    public function store($data)
    {
        Category::create($data);
    }
}