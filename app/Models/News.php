<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class News extends Model
{
    use SoftDeletes;

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

    public function getImagesAttribute()
    {
        return $this->images()->get();
    }
}
