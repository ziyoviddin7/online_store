<?php

namespace App\Livewire;

use App\Models\Tag;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;

class TagSearch extends Component
{
    public Collection $tags;
    public string $search = '';

    public function mount()
    {
        $this->tags = Tag::all();
    }

    public function render()
    {
        if ($this->search)
        {
            $this->tags = Tag::search($this->search)->get();
        } else {
            $this->tags = Tag::all();
        }
        return view('livewire.tag-search');
    }
}
