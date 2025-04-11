<?php

namespace App\Http\Controllers\Favorites;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Services\Favorites\FavoritesService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;

class FavoritesController extends Controller
{
    protected $favoritesService;

    public function __construct(FavoritesService $favoritesService)
    {
        $this->favoritesService = $favoritesService;
    }

    public function add(Request $request)
    {
        $product_id = $request->input('product_id');

        $this->favoritesService->addToFavorites($product_id);

        return redirect()->back()->with('success', 'item added to session(Favorites)');
    }

    public function show()
    {
        $user = Auth::user();
        $favorites_items = Cache::remember("favorites_items_show:{$user->id}:all", 600, function() {
            return $this->favoritesService->getFavoritesItems();
        });
        $favorites_total_quantity = $this->favoritesService->getTotalQuantity();
        return view('favorites.show-favorites', compact('favorites_items', 'favorites_total_quantity'));
    }

    public function remove(Product $product)
    {
        $product_id = $product->id;
        $this->favoritesService->removeFromFavorites($product_id);
        return redirect()->back()->with('success', "Item '{$product->name}' removed from favorites");
    }

}
