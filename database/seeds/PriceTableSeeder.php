<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Price;

class PriceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker=Faker::create();

        Price::create([
            'amount'=>$faker->numberBetween(600,900),
        ]);

        Price::create([
            'amount'=>$faker->numberBetween(600,900),
        ]);

        Price::create([
            'amount'=>$faker->numberBetween(600,900),
        ]);

        Price::create([
            'amount'=>$faker->numberBetween(600,900),
        ]);

        Price::create([
            'amount'=>$faker->numberBetween(600,900),
        ]);
    }
}
