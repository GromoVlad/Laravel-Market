<?php

namespace App\Model;

use App\Model\Traits\Translatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Order extends Model
{
    use Translatable;

    protected $fillable = ['user_id', 'currency_id', 'sum'];

    public function products()
    {
        return $this->belongsToMany(Product::class)->withPivot('count', 'price')->withTimestamps();
    }

    public function scopeActiveOrders($query)
    {
        return $query->where('user_id', Auth::user()->id)->where('status', 1);
    }

    public function scopeActiveOrdersAllUsers($query)
    {
        return $query->where('status', 1);
    }

    public function getFullPrice()
    {
        $sum = 0;
        foreach ($this->products()->withTrashed()->get() as $product) {
            $sum += $product->getPriceForCount();
        }
        return $sum;
    }

    public function getFullSum()
    {
        $sum = 0;

        foreach ($this->products as $product) {
            $sum += $product->price * $product->countInOrder;
        }

        return $sum;
    }

    public function saveOrder($name, $phone, $email)
    {
        $this->name = $name;
        $this->phone = $phone;
        $this->email = $email;
        $this->status = 1;
        $this->sum = $this->getFullSum();

        $products = $this->products;

        $this->save();

        foreach ($products as $productInOrder) {
            $this->products()->attach($productInOrder, [
                'count' => $productInOrder->countInOrder,
                'price' => $productInOrder->price,
            ]);
        }

        session()->forget('order');
        return true;
    }
}
