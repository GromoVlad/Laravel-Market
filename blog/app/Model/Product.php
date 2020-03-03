<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    protected $fillable = ['category_id', 'name', 'code', 'description', 'image', 'price', 'new', 'hit', 'recommend'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function getPriceForCount()
    {
        if (!is_null($this->pivot)) {
            return $this->pivot->count * $this->price;
        }
        return $this->price;
    }

    public function isNew()
    {
        return $this->new === 1;
    }

    public function isHit()
    {
        return $this->hit === 1;
    }

    public function isRecommend()
    {
        return $this->recommend === 1;
    }

    public function setNewAttribute($value)
    {
        return $this->attributes['new'] = $value === 'on' ? 1 : 0;
    }

    public function setHitAttribute($value)
    {
        return $this->attributes['hit'] = $value === 'on' ? 1 : 0;
    }

    public function setRecommendAttribute($value)
    {
        return $this->attributes['recommend'] = $value === 'on' ? 1 : 0;
    }
}