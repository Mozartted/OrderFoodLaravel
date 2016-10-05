<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Post;
use Carbon\Carbon;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker=Faker::create();

        Post::create([
            'title'=>$faker->realText(),
            'content'=>$faker->realText(),
            'created_at'=>Carbon::now(),
        ]);

        Post::create([
            'title'=>$faker->realText(),
            'content'=>$faker->realText(),
            'created_at'=>Carbon::now(),
        ]);

        Post::create([
            'title'=>$faker->realText(),
            'content'=>$faker->realText(),
            'created_at'=>Carbon::now(),
        ]);

        Post::create([
            'title'=>$faker->realText(),
            'content'=>$faker->realText(),
            'created_at'=>Carbon::now(),
        ]);

        Post::create([
            'title'=>$faker->realText(),
            'content'=>$faker->realText(),
            'created_at'=>Carbon::now(),
        ]);
    }
}
