<?php

namespace App\Livewire\Product;

use App\Models\Product;
use App\Models\Tag;
use Livewire\WithPagination;
use Livewire\Component;


class ProductSearch extends Component
{
    use WithPagination;
    public string $search = '';

    public $selectedTags = [];

    public function updatedSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $products = $this->search 
            ? Product::search($this->search)->paginate(9) 
            : Product::paginate(9);

        $tags = Tag::all();
        $favorites_session = session()->get('favorites', []);

        return view('livewire.product.product-search', [
            'products' => $products,
            'tags' => $tags,
            'favorites_session' => $favorites_session
        ]);
    }
}
