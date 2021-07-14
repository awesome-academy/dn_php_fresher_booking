<?php

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
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
                'name' => 'Long Trip',
                'description' => '3 days 2 nights',
                'parent_id' => null,
            ],
            [
                'name' => 'Short Trip',
                'description' => '1 days 1 nights',
                'parent_id' => '1',
            ],
        ];

        foreach ($categories as $category) {
            Category::create([
                'name' => $category['name'],
                'description' => $category['description'],
                'parent_id' => $category['parent_id'],
            ]);
        }
    }
}
