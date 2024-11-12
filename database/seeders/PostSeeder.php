<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        //
        for ($i=0; $i < 30; $i++) {
            $newPost = new Post();
            $newPost->title = $faker->word();
            $newPost->author = $faker->word();
            $newPost->content = $faker->text(150);
            $newPost->save();
        }
    }
}