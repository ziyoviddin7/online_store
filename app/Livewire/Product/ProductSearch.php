<?php

namespace App\Livewire\Product;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\Tag;
use Illuminate\Support\Facades\Cache;
use Livewire\WithPagination;
use Livewire\Component;


class ProductSearch extends Component
{
    use WithPagination;

    public $byCategory = null;
    public $byTag = null;
    public $byBrand = null;
    public $sortPrice = null;
    public $minPrice = null;
    public $maxPrice = null;
    public string $search = '';

    public function updated($property)
    {
        $filters = [
            'search',
            'byCategory',
            'byTag',
            'byBrand',
            'sortPrice',
            'minPrice',
            'maxPrice'
        ];

        if (in_array($property, $filters)) {
            $this->resetPage();
        }
    }

    public function resetAllFilters()
    {
        $this->reset([
            'byCategory',
            'byTag',
            'byBrand',
            'sortPrice',
            'minPrice',
            'maxPrice',
            'search'
        ]);
        $this->resetPage();
    }

    public function render()
    {
        // $products = $this->search 
        //     ? Product::search($this->search)->paginate(9) 
        //     : Product::paginate(9);

        $categories = Cache::remember('categories:all', 3600, function() {
            return Category::all();
        });

        $tags = Cache::remember('tags:all', 3600, function () {
            return Tag::all();
        });
    
        $brands = Cache::remember('brands:all', 3600, function () {
            return Brand::all();
        });

        $query = Product::query();

        // Поиск
        if ($this->search) {
            $query->where('name', 'like', '%' . $this->search . '%');
        }

        // Фильтры
        if ($this->byCategory) {
            $query->where('category_id', $this->byCategory);
        }

        if ($this->byBrand) {
            $query->where('brand_id', $this->byBrand);
        }

        if ($this->byTag) {
            $query->whereHas('tags', function ($q) {
                $q->where('tags.id', $this->byTag);
            });
        }

        // Цена
        if ($this->minPrice !== null) {
            $query->where('price', '>=', $this->minPrice);
        }

        if ($this->maxPrice !== null) {
            $query->where('price', '<=', $this->maxPrice);
        }

        // Сортировка
        if ($this->sortPrice) {
            $query->orderBy('price', $this->sortPrice);
        }

        return view('livewire.product.product-search', [
            'products' => $query->paginate(9),
            'categories' => $categories,
            'tags' => $tags,
            'brands' => $brands,
            'favorites_session' => session()->get('favorites', [])
        ]);
    }
}
