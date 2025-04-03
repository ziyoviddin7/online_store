<?php

namespace App\Http\Controllers\Order;   

use App\Http\Controllers\Controller;
use App\Http\Requests\Order\OrderStoreRequest;
use App\Models\Order;
use App\Services\Cart\CartService;
use App\Services\Order\YooKassaService;
use YooKassa\Client;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ShowOrderController extends Controller
{

    public function all_orders()
    {
        $userId = Auth::id();
        $orders = Order::where('user_id', $userId)->get();
        return view('order.show-orders', compact('orders'));
    }

}
