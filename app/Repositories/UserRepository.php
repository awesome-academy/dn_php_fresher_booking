<?php

namespace App\Repositories;

use App\User;

class UserRepository
{
    public function getAllUser()
    {
        return User::all();
    }
}
