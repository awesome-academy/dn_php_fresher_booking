<?php

namespace Tests\Unit\Models;

use App\Models\Tour;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Tests\TestCase;

class TourTest extends TestCase
{
    public function testContainsValidFillableProperties()
    {
        $columns = [
            'name',
            'description',
            'category_id',
            'money',
        ];
        $this->assertEquals($columns, (new Tour)->getFillable());
    }

    public function testBelongsToCategory()
    {
        $booking = new Tour();

        $relation = $booking->category();

        $this->assertInstanceOf(BelongsTo::class, $relation);

        $this->assertEquals('id', $relation->getOwnerKeyName());

        $this->assertEquals('category_id', $relation->getForeignKeyName());
    }

    public function testHasManyRates()
    {
        $booking = new Tour();

        $relation = $booking->rates();

        $this->assertInstanceOf(HasMany::class, $relation);

        $this->assertEquals('tour_id', $relation->getForeignKeyName());

        $this->assertEquals('tours.id', $relation->getQualifiedParentKeyName());
    }

    public function testHasManyBookings()
    {
        $booking = new Tour();

        $relation = $booking->bookings();

        $this->assertInstanceOf(HasMany::class, $relation);

        $this->assertEquals('tour_id', $relation->getForeignKeyName());

        $this->assertEquals('tours.id', $relation->getQualifiedParentKeyName());
    }
}
