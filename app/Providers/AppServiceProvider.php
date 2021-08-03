<?php

namespace App\Providers;

use App\Repositories\BookingRequest\BookingRequestRepository;
use App\Repositories\BookingRequest\BookingRequestRepositoryEloquent;
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
