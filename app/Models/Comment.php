<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comment extends Model
{
    use SoftDeletes;

    protected $appends = [
        'review',
        'comments',
        'user',
    ];

    protected $fillable = [
        'user_id',
        'content',
        'commentable_id',
        'commentable_type',
    ];

    protected $casts = [
        'created_at' => 'datetime:Y-m-d H:00',
        'updated_at' => 'datetime:Y-m-d H:00',
    ];

    public function commentable()
    {
        return $this->morphTo();
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function review()
    {
        return $this->belongsTo(Review::class);
    }

    public function comments()
    {
        return $this->morphMany(self::class, 'commentable');
    }

    public function getUserAttribute()
    {
        return $this->user()->get();
    }

    public function getReviewAttribute()
    {
        return $this->review()->get();
    }

    public function getCommentsAttribute()
    {
        return count($this->comments()->get());
    }
}
