<?php

use App\Models\Tour;
use Illuminate\Database\Seeder;

class TourSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [
                'name' => 'Nha Trang Trip',
                'description' => '3 days 2 nights',
                'category_id' => 1,
                'money' => '5000000',
            ],
            [
                'name' => 'Da Nang Trip',
                'description' => '1 days 1 nights',
                'category_id' => '2',
                'money' => '5000000',
            ],
            [
                'name' => 'Da Lat Trip',
                'description' => '3 days 2 nights',
                'category_id' => 1,
                'money' => '5000000',
            ],
            [
                'name' => 'Hue Trip',
                'description' => '1 days 1 nights',
                'category_id' => '2',
                'money' => '5000000',
            ],
            [
                'name' => 'Nha Trang Trip',
                'description' => '3 days 2 nights',
                'category_id' => 1,
                'money' => '5000000',
            ],
            [
                'name' => 'Da Nang Trip',
                'description' => '1 days 1 nights',
                'category_id' => '2',
                'money' => '5000000',
            ],
            [
                'name' => 'Nha Trang Trip',
                'description' => '3 days 2 nights',
                'category_id' => 1,
                'money' => '5000000',
            ],
            [
                'name' => 'Da Nang Trip',
                'description' => '1 days 1 nights',
                'category_id' => '2',
                'money' => '5000000',
            ],
            [
                'name' => 'Nha Trang Trip',
                'description' => '3 days 2 nights',
                'category_id' => 1,
                'money' => '5000000',
            ],
            [
                'name' => 'Da Nang Trip',
                'description' => '1 days 1 nights',
                'category_id' => '2',
                'money' => '5000000',
            ],
            [
                'name' => 'Da Nang Trip',
                'description' => '1 days 1 nights',
                'category_id' => '2',
                'money' => '5000000',
            ],
        ];

        foreach ($categories as $category) {
            Tour::create([
                'name' => $category['name'],
                'description' => $category['description'],
                'category_id' => $category['category_id'],
                'money' => $category['money'],
            ]);
        }
    }
}
