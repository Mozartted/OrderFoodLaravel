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
        'UserTableSeeder',
        'UserGroupTableSeeder'
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
        foreach ($this->seeders as $seedClass) {

            $this->call($seedClass);
        }
    }

    public function cleanDatabase()
    {
        // DB::statement('SET FOREIGN_KEY_CHECKS=0');

        foreach ($this->tables as $table) {

            DB::table($table)->truncate();
        }

        // DB::statement('SET FOREIGN_KEY_CHECKS=1');

    }
}
