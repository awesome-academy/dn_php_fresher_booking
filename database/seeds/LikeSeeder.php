<?php

use App\Models\Like;
use Illuminate\Database\Seeder;

class LikeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $likes = [
            [
                'user_id' => 1,
                'review_id' => 1,
            ],
            [
                'user_id' => 2,
                'review_id' => 1,
            ],
            [
                'user_id' => 3,
                'review_id' => 1,
            ],
        ];

        foreach ($likes as $like) {
            Like::create([
                'user_id' => $like['user_id'],
                'review_id' => $like['review_id'],
            ]);
        }
    }
}
