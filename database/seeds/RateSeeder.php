<?php

use App\Models\Rate;
use Illuminate\Database\Seeder;

class RateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rates = [
            [
                'user_id' => 1,
                'score' => 10,
                'tour_id' => 2,
            ],
            [
                'user_id' => 2,
                'score' => 9,
                'tour_id' => 1,
            ],
        ];

        foreach ($rates as $rate) {
            Rate::create([
                'user_id' => $rate['user_id'],
                'tour_id' => $rate['tour_id'],
                'score' => $rate['score'],
            ]);
        }
    }
}
