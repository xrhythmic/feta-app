<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database with Users and Posts with and without comments.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            PostSeeder::class,
            CommentSeeder::class
        ]);
    }
}
