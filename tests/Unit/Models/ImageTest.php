<?php

namespace Tests\Unit\Models;

use App\Models\Image;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Tests\TestCase;

class ImageTest extends TestCase
{
    public function testContainsValidFillableProperties()
    {
        $columns = [
            'type',
            'size',
            'path',
            'imagetable_id',
            'imagetable_type',
        ];
        $this->assertEquals($columns, (new Image)->getFillable());
    }

    public function testMorphTo()
    {
        $image = new Image();

        $relation = $image->imagetable();

        $this->assertInstanceOf(MorphTo::class, $relation);
    }
}
