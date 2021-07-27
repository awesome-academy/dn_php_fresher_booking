<?php

namespace Tests\Unit\Models;

use App\Models\Review;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Tests\TestCase;

class ReviewTest extends TestCase
{
    public function testContainsValidFillableProperties()
    {
        $columns = [
            'user_id',
            'content',
            'title',
        ];
        $this->assertEquals($columns, (new Review)->getFillable());
    }

    public function testBelongsToUser()
    {
        $review = new Review();

        $relation = $review->user();

        $this->assertInstanceOf(BelongsTo::class, $relation);

        $this->assertEquals('id', $relation->getOwnerKeyName());

        $this->assertEquals('user_id', $relation->getForeignKeyName());
    }

    public function testHasManyLikes()
    {
        $review = new Review();

        $relation = $review->likes();

        $this->assertInstanceOf(HasMany::class, $relation);

        $this->assertEquals('review_id', $relation->getForeignKeyName());

        $this->assertEquals('reviews.id', $relation->getQualifiedParentKeyName());
    }

    public function testMorphManyComments()
    {
        $review = new Review();

        $relation = $review->comments();

        $this->assertInstanceOf(MorphMany::class, $relation);

        $this->assertEquals('commentable_type', $relation->getMorphType());

        $this->assertEquals('commentable_id', $relation->getForeignKeyName());
    }
}
