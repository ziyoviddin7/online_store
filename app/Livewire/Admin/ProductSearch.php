<?php

namespace App\Livewire\Admin;

use App\Models\Product;
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
        return view('livewire.admin.product-search');
    }
}
