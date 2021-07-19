<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Like extends Model
{
    use SoftDeletes;

    protected $appends = [
        'user',
        'review',
    ];

    protected $fillable = [
        'user_id',
        'review_id',
    ];

    protected $casts = [
        'created_at' => 'datetime:Y-m-d H:00',
        'updated_at' => 'datetime:Y-m-d H:00',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function review()
    {
        return $this->belongsTo(Review::class);
    }

    public function getUserAttribute()
    {
        return $this->user()->get();
    }

    public function getReviewAttribute()
    {
        return $this->review()->get();
    }
}
