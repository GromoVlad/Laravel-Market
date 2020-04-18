<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Order;

class OrderController extends Controller
{

    public function index()
    {
        $orders = Order::activeOrdersAllUsers()->paginate(5);
        return view('auth.orders.index', compact('orders'));
    }

    public function show(Order $order)
    {
        $products = $order->products()->withTrashed()->get();
        return view('auth.orders.show', compact('order', 'products'));
    }
}
