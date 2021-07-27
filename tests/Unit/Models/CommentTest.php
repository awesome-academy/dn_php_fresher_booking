<?php

namespace Tests\Unit\Models;

use App\Models\Comment;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Tests\TestCase;

class CommentTest extends TestCase
{
    public function test_contains_valid_fillable_properties()
    {
        $columns = [
            'user_id',
            'content',
        ];
        $this->assertEquals($columns, (new Comment)->getFillable());
    }

    public function testBelongsToUser()
    {
        $comment = new Comment();

        $relation = $comment->user();

        $this->assertInstanceOf(BelongsTo::class, $relation);

        $this->assertEquals('id', $relation->getOwnerKeyName());

        $this->assertEquals('user_id', $relation->getForeignKeyName());
    }

    public function testBelongsToReview()
    {
        $comment = new Comment();

        $relation = $comment->review();

        $this->assertInstanceOf(BelongsTo::class, $relation);

        $this->assertEquals('id', $relation->getOwnerKeyName());

        $this->assertEquals('review_id', $relation->getForeignKeyName());
    }

    public function testMorphManyComments()
    {
        $comment = new Comment();

        $relation = $comment->comments();

        $this->assertInstanceOf(MorphMany::class, $relation);

        $this->assertEquals('commentable_type', $relation->getMorphType());

        $this->assertEquals('commentable_id', $relation->getForeignKeyName());
    }

    public function testMorphTo()
    {
        $comment = new Comment();

        $relation = $comment->commentable();

        $this->assertInstanceOf(MorphTo::class, $relation);
    }
}
