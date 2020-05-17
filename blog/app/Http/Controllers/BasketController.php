<?php

namespace App\Http\Controllers;

use App\Classes\Basket;
use App\Model\Sku;
use Illuminate\Http\Request;
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

    public function basketAdd(Sku $skus)
    {
        $result = (new Basket(true))->addSku($skus);
        if ($result) {
            session()->flash('success', __('main.added_item') . '"' . $skus->product->__('name') . '"');
        } else {
           session()->flash('warning', __('main.product') . '"' . $skus->product->__('name') . '"' . __('main.not_more'));
        }
        return redirect()->route('basket');
    }

    public function basketRemove(Sku $skus)
    {
        (new Basket())->removeSku($skus);
        session()->flash('warning', __('main.deleted_item') . '"' . $skus->product->__('name') . '"');
        return redirect()->route('basket');
    }

}
