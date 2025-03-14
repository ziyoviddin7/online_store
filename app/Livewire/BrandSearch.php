<?php

namespace App\Livewire;

use App\Models\Brand;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;

class BrandSearch extends Component
{
    public Collection $brands;
    public string $search = '';

    public function mount()
    {
        $this->brands = Brand::all();
    }

    public function render()
    {
        if ($this->search)
        {
            $this->brands = Brand::search($this->search)->get();
        } else {
            $this->brands = Brand::all();
        }
        return view('livewire.brand-search');
    }
}
