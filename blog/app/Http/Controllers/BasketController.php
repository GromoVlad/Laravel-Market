<?php

namespace App\Http\Controllers;

use App\Classes\Basket;
use Illuminate\Http\Request;
use App\Model\Product;
use Illuminate\Support\Facades\Auth;

class BasketController extends Controller
{
    public function basket()
    {
        $order = (new Basket())->getOrder();
        return view('basket', compact('order'));
    }

    public function basketConfirm(Request $request)
    {
        $email = Auth::check() ? Auth::user()->email : $request->email;
        if ((new Basket())->saveOrder($request->name, $request->phone, $email)) {
            session()->flash('success', __('basket.order_confirmed'));
        } else {
            session()->flash('warning', __('basket.not_available'));
        }

        return redirect()->route('index');
    }

    public function basketPlace()
    {
        $basket = new Basket();
        $order = $basket->getOrder();
        if (!$basket->countAvailable()) {
            session()->flash('warning', __('basket.not_available'));
            return redirect()->route('basket');
        }
        return view('order', compact('order'));
    }

    public function basketAdd(Product $product)
    {
        $result = (new Basket(true))->addProduct($product);
        if ($result) {
            session()->flash('success', __('main.added_item') . '"' . $product->__('name') . '"');
        } else {
            session()->flash('warning', __('main.product') . '"' . $product->__('name') . '"' . __('main.not_more'));
        }
        return redirect()->route('basket');
    }

    public function basketRemove(Product $product)
    {
        (new Basket())->removeProduct($product);
        return redirect()->route('basket');
    }

}
