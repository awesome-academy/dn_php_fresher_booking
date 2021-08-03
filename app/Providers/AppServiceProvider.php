<?php

namespace App\Providers;

use App\Repositories\BookingRequest\BookingRequestRepository;
use App\Repositories\BookingRequest\BookingRequestRepositoryEloquent;
use App\Repositories\Comment\CommentRepository;
use App\Repositories\Comment\CommentRepositoryEloquent;
use App\Repositories\Rate\RateRepository;
use App\Repositories\Rate\RateRepositoryEloquent;
use App\Repositories\Review\ReviewRepository;
use App\Repositories\Review\ReviewRepositoryEloquent;
use App\Repositories\Tour\TourRepository;
use App\Repositories\Tour\TourRepositoryEloquent;
use App\Repositories\User\UserRepository;
use App\Repositories\User\UserRepositoryEloquent;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            BookingRequestRepository::class,
            BookingRequestRepositoryEloquent::class
        );
        $this->app->bind(
            TourRepository::class,
            TourRepositoryEloquent::class
        );
        $this->app->bind(
            UserRepository::class,
            UserRepositoryEloquent::class
        );
        $this->app->bind(
            CommentRepository::class,
            CommentRepositoryEloquent::class
        );
        $this->app->bind(
            RateRepository::class,
            RateRepositoryEloquent::class
        );
        $this->app->bind(
            ReviewRepository::class,
            ReviewRepositoryEloquent::class
        );
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
