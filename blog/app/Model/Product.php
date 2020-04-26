<?php

namespace App\Model;

use App\Model\Traits\Translatable;
use App\Services\CurrencyConversion;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes, Translatable;

    protected $fillable = [
        'category_id',
        'name',
        'code',
        'description',
        'image',
        'price',
        'new',
        'hit',
        'recommend',
        'count',
        'name_en',
        'description_en'
    ];

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

    public function scopeNew($query)
    {
        return $query->where('new', 1);
    }

    public function scopeHit($query)
    {
        return $query->where('hit', 1);
    }

    public function scopeRecommend($query)
    {
        return $query->where('recommend', 1);
    }

    public function isAvailable()
    {
        return !$this->trashed() && $this->count > 0;
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

    public function getPriceAttribute($value)
    {
        return CurrencyConversion::convert($value);
    }

}
