<?php

namespace Tests\Unit\Models;

use App\Models\Rate;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Tests\TestCase;

class RateTest extends TestCase
{
    public function testContainsValidFillableProperties()
    {
        $columns = [
            'user_id',
            'score',
            'tour_id',
        ];
        $this->assertEquals($columns, (new Rate)->getFillable());
    }

    public function testBelongsToTour()
    {
        $rate = new Rate();

        $relation = $rate->tour();

        $this->assertInstanceOf(BelongsTo::class, $relation);

        $this->assertEquals('id', $relation->getOwnerKeyName());

        $this->assertEquals('tour_id', $relation->getForeignKeyName());
    }

    public function testBelongsToUser()
    {
        $rate = new Rate();

        $relation = $rate->user();

        $this->assertInstanceOf(BelongsTo::class, $relation);

        $this->assertEquals('id', $relation->getOwnerKeyName());

        $this->assertEquals('user_id', $relation->getForeignKeyName());
    }
}
