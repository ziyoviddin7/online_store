<?php

namespace App\Livewire\Admin;

use App\Models\Product;
use Livewire\WithPagination;

use Livewire\Component;

class ProductSearch extends Component
{
    use WithPagination;
    
    public string $search = '';

    public function updatedSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $products = $this->search 
            ? Product::search($this->search)->paginate(9) 
            : Product::paginate(9);
        return view('livewire.admin.product-search', ['products' => $products]);
    }
}
