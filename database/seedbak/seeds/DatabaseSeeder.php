<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(DistrictTableSeeder::class);
        $this->call(ThanaTableSeeder::class);
        $this->call(PoliceStationTableSeeder::class);
        $this->call(VillageTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(PermissionTableSeeder::class);
    }
}
