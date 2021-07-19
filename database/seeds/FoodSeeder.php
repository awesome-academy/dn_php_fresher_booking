<?php

use App\Models\Food;
use Illuminate\Database\Seeder;

class FoodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Food::truncate();

        $foods = [
            [
                'title' => 'bun cha ca',
                'description' => 'dac san'
            ],
            [
                'title' => 'bun cha ca',
                'description' => 'dac san'
            ],
            [
                'title' => 'bun cha ca',
                'description' => 'dac san'
            ],
        ];
        foreach ($foods as $food) {
            Food::create([
                'title' => $food['title'],
                'description' => $food['description'],
            ]);
        }
    }
}
