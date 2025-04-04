<?php

namespace App\Livewire\Admin;

use App\Models\Category;
use Livewire\WithPagination;

use Livewire\Component;


class CategorySearch extends Component
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
        $categories = $this->search
            ? Category::search($this->search)->paginate(15)
            : Category::paginate(15);
        return view('livewire.admin.category-search', ['categories' => $categories]);
    }
}
