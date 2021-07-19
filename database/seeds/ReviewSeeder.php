<?php

use App\Models\Food;
use Illuminate\Database\Seeder;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $food = Food::find(1)->reviews()->create([
            'user_id' => 1,
            'content' => 'Chao mung cac ban',
            'title' => 'review_food',
        ]);
    }
}
