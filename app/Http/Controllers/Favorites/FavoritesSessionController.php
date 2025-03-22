<?php

namespace App\Http\Controllers\Favorites;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Services\Favorites\FavoritesSession;
use Illuminate\Http\Request;

class FavoritesSessionController extends Controller
{
    protected $favoritesSession;

    public function __construct(FavoritesSession $favoritesSession)
    {
        $this->favoritesSession = $favoritesSession;
    }

    public function add(Request $request)
    {
        $product_id = $request->input('product_id');

        $this->favoritesSession->addToFavorites($product_id);

        return redirect()->back()->with('success', 'item added to session(Favorites)');
    }

    public function show()
    {
        $favoritesSession_items = $this->favoritesSession->getFavoritesItems();
        $favoritesSession_total_quantity = $this->favoritesSession->getTotalQuantity();
        return view('favorites.show-favorites', compact('favoritesSession_items', 'favoritesSession_total_quantity'));
    }

    public function remove(Product $product)
    {
        $product_id = $product->id;
        $this->favoritesSession->removeFromFavorites($product_id);
        return redirect()->back()->with('success', "Item '{$product->name}' removed from favorites");
    }
}
