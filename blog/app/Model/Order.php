<?php

namespace App\Model;

use App\Model\Traits\Translatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Order extends Model
{
    use Translatable;

    protected $fillable = ['user_id'];

    public function products()
    {
        return $this->belongsToMany(Product::class)->withPivot('count')->withTimestamps();
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

    public function saveOrder($name, $phone, $email)
    {
        if ($this->status == 0) {
            $this->name = $name;
            $this->phone = $phone;
            $this->email = $email;
            $this->status = 1;
            $this->save();
            session()->forget('orderId');
            return true;
        } else {
            return false;
        }
    }
}
