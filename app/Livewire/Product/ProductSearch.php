<?php

namespace App\Livewire\Product;

use App\Models\Product;
use App\Models\Tag;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;


class ProductSearch extends Component
{
    public Collection $products;
    public string $search = '';

    public function mount()
    {
        $this->products = Product::all();
    }

    public function render()
    {
        if ($this->search)
        {
            $this->products = Product::search($this->search)->get();
        } else {
            $this->products = Product::all();
        }

        $tags = Tag::all();
        
        return view('livewire.product.product-search', compact('tags'));
    }
}
