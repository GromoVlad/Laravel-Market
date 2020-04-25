<?php

namespace App\Observers;

use App\Model\Product;
use App\Model\Subscription;

class ProductObserver
{

    public function updating(Product $product)
    {
        $oldCount = $product->getOriginal('count');
        if ($oldCount == 0 && $product->count > 0) {
            Subscription::sendEmailsBySubscription($product);
        }
    }

}
