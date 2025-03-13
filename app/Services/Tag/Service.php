<?php


namespace App\Services\Tag;

use App\Models\Product;
use App\Models\Tag;
use Illuminate\Support\Facades\Storage;

class Service
{
    public function store($data)
    {
        Tag::create($data);
    }

    public function update($task, $data)
    {
    }
}