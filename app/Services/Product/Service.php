<?php


namespace App\Services\Product;

use App\Models\Product;
use Illuminate\Support\Facades\Storage;

class Service
{
    public function store($data)
    {
        $data['image'] = Storage::put('/product_images', $data['image']);

        $tag_id = $data['tag_id'];

        $product = Product::create($data);
        $product->tags()->attach($tag_id);
    }

    public function update($task, $data)
    {
    }
}