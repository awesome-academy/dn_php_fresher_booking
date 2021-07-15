<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BookingRequest extends Model
{
    use SoftDeletes;

    protected $appends = [
        'tour',
        'user',
    ];

    protected $fillable = [
        'note',
        'status',
        'tour_id',
        'user_id',
    ];

    protected $casts = [
        'created_at' => 'datetime:Y-m-d H:00',
        'updated_at' => 'datetime:Y-m-d H:00',
        'date' => 'datetime:Y-m-d H:00',
    ];

    public function tour()
    {
        return $this->belongsTo(Tour::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getTourAttribute()
    {
        return $this->tour()->get();
    }

    public function getUserAttribute()
    {
        return $this->user()->get();
    }
}
