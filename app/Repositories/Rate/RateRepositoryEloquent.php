<?php

namespace App\Repositories\Rate;

use App\Models\Rate;
use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\Rate\RateRepository;
use App\Validators\Rate\RateValidator;

/**
 * Class RateRepositoryEloquent.
 *
 * @package namespace App\Repositories\Rate;
 */
class RateRepositoryEloquent extends BaseRepository implements RateRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Rate::class;
    }



    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
