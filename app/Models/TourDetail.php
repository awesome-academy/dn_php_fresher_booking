<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TourDetail extends Model
{
    use SoftDeletes;

    protected $appends = [
        'foods',
        'places',
        'news',
    ];

    protected $fillable = [
        'tour_id',
        'food_id',
        'place_id',
        'news_id',
    ];

    protected $casts = [
        'created_at' => 'datetime:Y-m-d H:00',
        'updated_at' => 'datetime:Y-m-d H:00',
    ];

    public function foods()
    {
        return $this->hasMany(Food::class);
    }

    public function news()
    {
        return $this->hasMany(News::class);
    }

    public function places()
    {
        return $this->hasMany(Place::class);
    }

    public function getFoodsAttribute()
    {
        return $this->foods()->get();
    }

    public function getPlacesAttribute()
    {
        return $this->places()->get();
    }

    public function getNewsAttribute()
    {
        return $this->news()->get();
    }
}
