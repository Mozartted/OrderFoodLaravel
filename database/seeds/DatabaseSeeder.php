<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Faker\Factory as Faker;
use App\User;

class DatabaseSeeder extends Seeder
{

    protected $tables=[
        'users','user_group'
    ];

    protected $seeders=[
        'UserTableSeeder'
    ];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        // $this->call(UsersTableSeeder::class);
        foreach($this->seeders as $seederClass){
            $this->call($seederClass);
        }
    }
}
