<?php


namespace App\Services\Category;

use App\Models\Category;

class CategoryService
{
    public function store($data)
    {
        return Category::create($data);
    }
}