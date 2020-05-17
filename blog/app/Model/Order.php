<?php

namespace App\Model;

use App\Model\Traits\Translatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Order extends Model
{
    use Translatable;

    protected $fillable = ['user_id', 'currency_id', 'sum'];

    public function skus()
    {
        return $this->belongsToMany(Sku::class)->withPivot('count', 'price')->withTimestamps();
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
        foreach ($this->skus()->withTrashed()->get() as $sku) {
            $sum += $sku->getPriceForCount();
        }
        return $sum;
    }

    public function getFullSum()
    {
        $sum = 0;

        foreach ($this->skus as $sku) {
            $sum += $sku->price * $sku->countInOrder;
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

        $skus = $this->skus;

        $this->save();

        foreach ($skus as $skuInOrder) {
            $this->skus()->attach($skuInOrder, [
                'count' => $skuInOrder->countInOrder,
                'price' => $skuInOrder->price,
            ]);
        }

        session()->forget('order');
        return true;
    }
}
