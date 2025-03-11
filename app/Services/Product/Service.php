<?php


namespace App\Services\Product;

use App\Models\Product;

class Service
{
    public function store($request, $data)
    {
        $tag_id = $data['tag_id'];

        $product = Product::create($data);
        $product->tags()->attach($tag_id);
    }

    public function update($task, $data)
    {
    }
}