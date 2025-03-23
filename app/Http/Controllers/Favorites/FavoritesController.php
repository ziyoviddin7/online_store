<?php

namespace App\Http\Controllers\Favorites;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Services\Favorites\Favorites;
use Illuminate\Http\Request;

class FavoritesController extends Controller
{
    protected $favorites;

    public function __construct(Favorites $favorites)
    {
        $this->favorites = $favorites;
    }

    public function add(Request $request)
    {
        $product_id = $request->input('product_id');

        $this->favorites->addToFavorites($product_id);

        return redirect()->back()->with('success', 'item added to session(Favorites)');
    }

    public function show()
    {
        $favorites_items = $this->favorites->getFavoritesItems();
        $favorites_total_quantity = $this->favorites->getTotalQuantity();
        return view('favorites.show-favorites', compact('favorites_items', 'favorites_total_quantity'));
    }

    public function remove(Product $product)
    {
        $product_id = $product->id;
        $this->favorites->removeFromFavorites($product_id);
        return redirect()->back()->with('success', "Item '{$product->name}' removed from favorites");
    }

}
