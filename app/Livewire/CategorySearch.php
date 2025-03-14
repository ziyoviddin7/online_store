<?php

namespace App\Livewire;

use App\Models\Category;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;

class CategorySearch extends Component
{
    public Collection $categories;
    public string $search = '';

    public function mount()
    {
        $this->categories = Category::all();
    }

    public function render()
    {
        if ($this->search)
        {
            $this->categories = Category::search($this->search)->get();
        } else {
            $this->categories = Category::all();
        }
        return view('livewire.category-search');
    }
}
