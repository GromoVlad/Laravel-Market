<?php

namespace App\Http\Middleware;

use Closure;
use App\Model\Order;

class BasketIsNotEmpty
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $order = session('order');
        if (!is_null($order) && $order->getFullSum() > 0) {
            return $next($request);
        }

        session()->flush('order');

        session()->flash('warning', __('main.basket_empty'));
        return redirect()->route('index');
    }
}
