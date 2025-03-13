<?php


namespace App\Services\Category;

use App\Models\Category;

class Service
{
    public function store($data)
    {
        Category::create($data);
    }

    public function update($task, $data)
    {
    }
}