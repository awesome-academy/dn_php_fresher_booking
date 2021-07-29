<?php

namespace Tests\Unit\Models;

use App\Models\Food;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Tests\TestCase;

class FoodTest extends TestCase
{
    public function testContainsValidFillableProperties()
    {
        $columns = [
            'title',
            'description',
        ];
        $this->assertEquals($columns, (new Food)->getFillable());
    }

    public function testMorphManyImages()
    {
        $food = new Food();

        $relation = $food->images();

        $this->assertInstanceOf(MorphMany::class, $relation);

        $this->assertEquals('imagetable_type', $relation->getMorphType());

        $this->assertEquals('imagetable_id', $relation->getForeignKeyName());
    }

    public function testMorphManyReviews()
    {
        $food = new Food();

        $relation = $food->reviews();

        $this->assertInstanceOf(MorphMany::class, $relation);

        $this->assertEquals('reviewtable_type', $relation->getMorphType());

        $this->assertEquals('reviewtable_id', $relation->getForeignKeyName());
    }
}
