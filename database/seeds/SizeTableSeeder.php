<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Size;

class SizeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker=Faker::create();

        Size::create([
            'name'=>$faker->numberBetween(6,12),
            'percent'=>$faker->numberBetween(0,100),
        ]);

        Size::create([
            'name'=>$faker->numberBetween(6,12),
            'percent'=>$faker->numberBetween(0,100),
        ]);

        Size::create([
            'name'=>$faker->numberBetween(6,12),
            'percent'=>$faker->numberBetween(0,100),
        ]);

        Size::create([
            'name'=>$faker->numberBetween(6,12),
            'percent'=>$faker->numberBetween(0,100),
        ]);

        Size::create([
            'name'=>$faker->numberBetween(6,12),
            'percent'=>$faker->numberBetween(0,100),
        ]);
    }
}
