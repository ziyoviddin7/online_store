<?php

namespace App\Http\Controllers\Favorites;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Services\Favorites\FavoritesSession;
use App\Services\Favorites\FavoritesSessionService;
use Illuminate\Http\Request;

class FavoritesSessionController extends Controller
{
    protected $favoritesSessionService;

    public function __construct(FavoritesSessionService $favoritesSessionService)
    {
        $this->favoritesSessionService = $favoritesSessionService;
    }

    public function add(Request $request)
    {
        $product_id = $request->input('product_id');

        $this->favoritesSessionService->addToFavorites($product_id);

        return redirect()->back()->with('success', 'item added to session(Favorites)');
    }

    public function show()
    {
        $favoritesSession_items = $this->favoritesSessionService->getFavoritesItems();
        $favoritesSession_total_quantity = $this->favoritesSessionService->getTotalQuantity();
        return view('favorites.show-favorites', compact('favoritesSession_items', 'favoritesSession_total_quantity'));
    }

    public function remove(Product $product)
    {
        $product_id = $product->id;
        $this->favoritesSessionService->removeFromFavorites($product_id);
        return redirect()->back()->with('success', "Item '{$product->name}' removed from favorites");
    }
}
