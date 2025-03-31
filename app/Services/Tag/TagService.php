<?php


namespace App\Services\Tag;

use App\Models\Tag;

class TagService
{
    public function store($data)
    {
        Tag::create($data);
    }

    public function update($task, $data)
    {
    }
}