<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker=Faker::create();

        foreach(range(1,30) as $index){

            User::create([
                'name'=>$faker->firstName,
                'email'=>$faker->email,
                'password'=>bcrypt('secret'),
                'user_group'=>$faker->biasedNumberBetween(1,2),
            ]);

        }
    }
}
