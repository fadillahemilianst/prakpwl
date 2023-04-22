<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory;
use DB;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $posts = [];
        $faker = factory::create();
        $p;

        for($p=1; $p<=10; $p++){
            $posts [] = [
                'title'=>$faker->title,
                'excerpt'=>$faker->text,
                'content'=>$faker->text,
                'image'=>$faker->image,
                'author_id'=>mt_rand(1,10),
                'created_at'=>$faker->dateTime(),
            ];
        }
        DB::table("posts")->insert($posts);
    }
}