<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Food extends Model
{
    use SoftDeletes;

    protected $table = 'foods';

    protected $appends = [
        'images',
    ];

    protected $fillable = [
        'title',
        'description',
    ];

    protected $casts = [
        'created_at' => 'datetime:Y-m-d H:00',
        'updated_at' => 'datetime:Y-m-d H:00',
    ];

    public function images()
    {
        return $this->morphMany(Image::class, 'imagetable');
    }

    public function reviews()
    {
        return $this->morphMany(Review::class, 'reviewtable');
    }

    public function getImagesAttribute()
    {
        return $this->images()->get();
    }
}
