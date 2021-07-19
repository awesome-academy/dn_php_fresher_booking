<?php

namespace App\Repositories;

use App\Models\Tour;

class TourRepository
{
    public function getAllTour()
    {
        return Tour::all();
    }
}
