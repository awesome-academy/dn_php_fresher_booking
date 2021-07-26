<?php

namespace Tests\Unit\Models;

use App\Models\BookingRequest;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Tests\TestCase;

class BookingRequestTest extends TestCase
{
    public function testContainsValidFillableProperties()
    {
        $columns = [
            'note',
            'status',
            'tour_id',
            'user_id',
        ];
        $this->assertEquals($columns, (new BookingRequest)->getFillable());
    }

    public function testBelongsToTour()
    {
        $booking = new BookingRequest();

        $relation = $booking->tour();

        $this->assertInstanceOf(BelongsTo::class, $relation);

        $this->assertEquals('id', $relation->getOwnerKeyName());

        $this->assertEquals('tour_id', $relation->getForeignKeyName());
    }

    public function testBelongsToUser()
    {
        $booking = new BookingRequest();

        $relation = $booking->user();

        $this->assertInstanceOf(BelongsTo::class, $relation);

        $this->assertEquals('id', $relation->getOwnerKeyName());

        $this->assertEquals('user_id', $relation->getForeignKeyName());
    }
}
