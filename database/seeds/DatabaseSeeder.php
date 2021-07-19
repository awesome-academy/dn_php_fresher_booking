<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            CategorySeeder::class,
            TourSeeder::class,
            RateSeeder::class,
            BookingRequestSeeder::class,
            FoodSeeder::class,
            ReviewSeeder::class,
            LikeSeeder::class,
            CommentSeeder::class,
        ]);
    }
}
