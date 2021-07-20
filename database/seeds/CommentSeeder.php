<?php

use App\Models\Comment;
use App\Models\Review;
use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Review::find(1)->comments()->create([
            'user_id' => 1,
            'content' => 'bai viet hay lam',
        ]);
        Comment::find(1)->comments()->create([
            'user_id' => 2,
            'content' => 'vay ma hay sao ?',
        ]);
    }
}
