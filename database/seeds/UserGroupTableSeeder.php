<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\UserGroup;

class UserGroupTableSeeder extends Seeder
{
    protected $names=['Admin','Writer'];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        for($range=0;$range<2;$range++){
            UserGroup::create([
                'name'=>$this->names[$range]
            ]);
        }
    }
}
