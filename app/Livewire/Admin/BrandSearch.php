<?php

namespace App\Livewire\Admin;

use App\Models\Brand;
use Livewire\WithPagination;

use Livewire\Component;

class BrandSearch extends Component
{
    use WithPagination;
    
    public string $search = '';
    
    public function updatedSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $brands = $this->search 
            ? Brand::search($this->search)->paginate(15) 
            : Brand::paginate(15);
        return view('livewire.admin.brand-search', ['brands' => $brands]);
    }
}
