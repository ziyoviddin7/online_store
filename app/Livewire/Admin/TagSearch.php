<?php

namespace App\Livewire\Admin;

use App\Models\Tag;
use Livewire\WithPagination;

use Livewire\Component;

class TagSearch extends Component
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
        $tags = $this->search 
            ? Tag::search($this->search)->paginate(15) 
            : Tag::paginate(15);
        return view('livewire.admin.tag-search', ['tags' => $tags] );
    }
}
