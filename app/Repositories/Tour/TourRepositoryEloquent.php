<?php

namespace App\Repositories\Tour;

use App\Models\Tour;
use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\Tour\TourRepository;
use App\Validators\Tour\TourValidator;

/**
 * Class TourRepositoryEloquent.
 *
 * @package namespace App\Repositories\Tour;
 */
class TourRepositoryEloquent extends BaseRepository implements TourRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Tour::class;
    }



    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
