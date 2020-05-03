<?php


namespace App\ViewComposers;

use App\Model\Order;
use App\Model\Product;
use Illuminate\Contracts\View\View;

class BestProductsComposer
{
    public function compose(View $view)
    {
        $bestProductsIds = Order::get()->map->products->flatten()->map->pivot->mapToGroups(function ($pivot) {
            return [$pivot->product_id => $pivot->count];
        })->map->sum()->sortByDesc(null)->take(3)->keys()->toArray();
        $bestProducts = Product::whereIn('id', $bestProductsIds)->get();
        $view->with('bestProducts', $bestProducts);
    }
}
