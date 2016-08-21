<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Seeder\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $this->call(UsersTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(PermissionsTableSeeder::class);
        $this->call(SpotsTableSeeder::class);
        $this->call(SpotsCategoryTableSeeder::class);

    }
}
