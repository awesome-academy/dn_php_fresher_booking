<?php

namespace Tests\Unit\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Tests\TestCase;

class CategoryTest extends TestCase
{

    public function testContainsValidFillableProperties()
    {
        $columns = [
            'name',
            'description',
            'parent_id',
        ];
        $this->assertEquals($columns, (new Category)->getFillable());
    }

    public function testBelongsToParentCategory()
    {
        $category = new Category();

        $relation = $category->parent();

        $this->assertInstanceOf(BelongsTo::class, $relation);

        $this->assertEquals('id', $relation->getOwnerKeyName());

        $this->assertEquals('parent_id', $relation->getForeignKeyName());
    }
}
