<?php

namespace App\Http\Controllers\Order;   

use App\Http\Controllers\Controller;
use App\Models\Order;

use Illuminate\Support\Facades\Auth;

class ShowOrderController extends Controller
{

    public function order_list()
    {
        $userId = Auth::id();
        $orders = Order::where('user_id', $userId)->get();
        return view('order.show-all-orders', compact('orders'));
    }

    public function order_details(Order $order)
    {
        
        return view('order.show-order', compact('order'));
    }

}
