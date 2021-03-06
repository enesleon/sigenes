<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
            factory('App\User', 100)->create();
        Model::reguard();
        // $this->call(UserTableSeeder::class);
    }
}
