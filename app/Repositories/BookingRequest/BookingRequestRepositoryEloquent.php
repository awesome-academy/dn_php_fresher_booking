<?php

namespace App\Repositories\BookingRequest;

use App\Models\BookingRequest;
use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\BookingRequest\BookingRequestRepository;
use App\Validators\BookingRequest\BookingRequestValidator;

/**
 * Class BookingRequestRepositoryEloquent.
 *
 * @package namespace App\Repositories\BookingRequest;
 */
class BookingRequestRepositoryEloquent extends BaseRepository implements BookingRequestRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return BookingRequest::class;
    }



    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
