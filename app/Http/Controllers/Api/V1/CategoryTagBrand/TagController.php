<?php

namespace App\Http\Controllers\Api\V1\CategoryTagBrand;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\NameRequest;
use App\Http\Resources\V1\Tag\TagResource;
use App\Models\Tag;
use App\Services\Tag\TagService;
use Illuminate\Support\Facades\Cache;

class TagController extends Controller
{
    protected $tagService;

    public function __construct(TagService $tagService)
    {
        $this->tagService = $tagService;
    }

    public function index()
    {
        $tags = Cache::remember('tags:all', 3600, function () {
            return Tag::all();
        });
        return TagResource::collection($tags);
    }

    public function store(NameRequest $name_request)
    {
        $data = $name_request->validated();
        $tag = $this->tagService->store($data);
        return new TagResource($tag);
    }

    public function show(Tag $tag)
    {
        $tagWithProducts = Cache::remember("tag:{$tag->id}:detail", 3600, function () use ($tag) {
            return $tag->load('products');
        });

        return new TagResource($tagWithProducts);
    }

    public function destroy(Tag $tag)
    {
        if ($tag->products()->exists()) {
            return response()->json([
                "error" => "Unable to delete the '{$tag->name}' tag: related products exist"
            ]);
        }
        $tag->delete();
        return response()->json([
            "message" => "Brand '{$tag->name}' removed"
        ]);
    }
}
