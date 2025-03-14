<?php

namespace App\Http\Controllers\Admin\CategoryTagBrand;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\NameRequest;
use App\Models\Tag;
use App\Services\Tag\Service;
use Illuminate\Http\Request;

class TagController extends Controller
{
    protected $service;

    public function __construct(Service $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        $tags = Tag::all();
        return view('admin.category_tag_brand.tag.tag-list', compact('tags'));
    }

    public function create()
    {
        return view('admin.category_tag_brand.tag.new-tag'); 
    }

    public function store(NameRequest $name_request)
    {
        $data = $name_request->validated();
        $this->service->store($data);
        return redirect()->route('admin.tag.index')->with('success', 'Тег успешно создан.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Tag $tag)
    {
        $products = $tag->products()->paginate(15);
        return view('admin.category_tag_brand.tag.show-tag', compact('products', 'tag'));
    }
    public function destroy(Tag $tag)
    {
        if ($tag->products()->exists()) {
            return redirect()->route('admin.tag.index')->with('error', "Unable to delete the '{$tag->name}' tag: related products exist");
        }
        $tag->delete();
        return redirect()->route('admin.tag.index');
    }
}
