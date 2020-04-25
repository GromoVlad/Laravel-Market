<?php

namespace App\Http\Controllers\Person;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Order;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::activeOrders()->paginate(5);
        return view('auth.orders.index', compact('orders'));
    }

    public function show(Order $order)
    {
        $products = $order->products()->withTrashed()->get();
        if(!Auth::user()->orders->contains($order)){
            return redirect('/person/orders');
        }
        return view('auth.orders.show', compact('order', 'products'));
    }
}