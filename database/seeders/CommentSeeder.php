<?php

namespace Database\Seeders;

use App\Models\Comment;
use App\Models\User;
use App\Models\Post;
use App\Models\Category;
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
        // Manually Seeded
        $user = User::factory()->create();

        Comment::create([
            'body' => 'A Manually Defined Seeded Post',
            'post_id' => Post::create([
                'title' => 'Comment Created Post',
                'excerpt' => 'A Manually Defined Seeded Post',
                'body' => 'Body of a Manually Defined Seeded Post',
                'user_id' => $user->id,
                'category_id' => Category::create([
                    'name' => 'Comment Manually Seeded',
                    'slug' => 'comment-seeded'
                ])->id
            ])->id,
            'user_id' => $user->id
        ]);

        // Factory Seeded
        Comment::factory(5)->create();
    }
}
