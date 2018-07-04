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
        $this->call(BuildingTableSeeder::class);
        $this->call(AppartmentTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(AppartmentsUsersTableSeeder::class);
        $this->call(EquipmentsTypesTableSeeder::class); 
        $this->call(EquipmentsTableSeeder::class);
    }
}
