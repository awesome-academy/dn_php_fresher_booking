<?php

namespace Tests\Unit\Models;

use App\Models\Like;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Tests\TestCase;

class LikeTest extends TestCase
{
    public function testContainsValidFillableProperties()
    {
        $columns = [
            'user_id',
            'review_id',
        ];
        $this->assertEquals($columns, (new Like)->getFillable());
    }

    public function testBelongsToUser()
    {
        $like = new Like();

        $relation = $like->user();

        $this->assertInstanceOf(BelongsTo::class, $relation);

        $this->assertEquals('id', $relation->getOwnerKeyName());

        $this->assertEquals('user_id', $relation->getForeignKeyName());
    }

    public function testBelongsToReview()
    {
        $like = new Like();

        $relation = $like->review();

        $this->assertInstanceOf(BelongsTo::class, $relation);

        $this->assertEquals('id', $relation->getOwnerKeyName());

        $this->assertEquals('review_id', $relation->getForeignKeyName());
    }
}
