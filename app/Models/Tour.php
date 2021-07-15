<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tour extends Model
{
    use SoftDeletes;

    protected $appends = [
        'category',
        'bookings'
    ];

    protected $fillable = [
        'name',
        'description',
        'category_id',
        'money',
    ];

    protected $casts = [
        'created_at' => 'datetime:Y-m-d H:00',
        'updated_at' => 'datetime:Y-m-d H:00',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function bookings()
    {
        return $this->hasMany(BookingRequest::class);
    }

    public function getCategoryAttribute()
    {
        return $this->category()->get();
    }

    public function getBookingsAttribute()
    {
        return count($this->bookings()->get());
    }
}
