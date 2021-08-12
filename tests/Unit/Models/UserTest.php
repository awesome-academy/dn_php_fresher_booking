<?php

namespace Tests\Unit\Models;

use App\User;
use Tests\TestCase;

class UserTest extends TestCase
{
    public function testContainsValidFillableProperties()
    {
        $columns = [
            'name',
            'email',
            'password',
            'address',
            'type',
            'is_admin',
        ];
        $this->assertEquals($columns, (new User)->getFillable());

        //new
    }
}
