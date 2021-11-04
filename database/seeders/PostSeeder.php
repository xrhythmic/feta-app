<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database Post model seeds.
     *
     * @return void
     */
    public function run()
    {
        //Post Factory will create new users and categories for each of these posts
        Post::factory(5)->create();
    }
}
