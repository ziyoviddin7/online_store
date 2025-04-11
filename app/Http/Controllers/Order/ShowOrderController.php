<?php

namespace App\Http\Controllers\Order;   

use App\Http\Controllers\Controller;
use App\Models\Order;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;

class ShowOrderController extends Controller
{

    public function order_list()
    {
        $userId = Auth::id();
        $orders = Cache::remember("order_list:{$userId}:list", 3600, function() use ($userId) {
            return Order::where('user_id', $userId)->get();
        });
        return view('order.show-all-orders', compact('orders'));
    }

    public function order_details(Order $order)
    {
        $userId = Auth::id();
        $order = Cache::remember("order_detail:{$userId}:{$order->id}:detail", 3600, function() use ($order) {
            return $order;
        });
        return view('order.show-order', compact('order'));
    }

}
