<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;

    protected $appends = [
        'tours', 'parent'
    ];

    protected $fillable = [
        'name',
        'description',
        'parent_id',
    ];

    protected $casts = [
        'created_at' => 'datetime:Y-m-d H:00',
        'updated_at' => 'datetime:Y-m-d H:00',
    ];

    public function tours()
    {
        return $this->hasMany(Tour::class);
    }

    public function parent()
    {
        return $this->belongsTo(self::class, 'parent_id');
    }

    public function getToursAttribute()
    {
        return $this->tours()->get();
    }

    public function getParentAttribute()
    {
        return $this->parent()->get();
    }
}
