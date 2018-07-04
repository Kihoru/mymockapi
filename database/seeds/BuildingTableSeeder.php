<?php

use App\Building;
use Illuminate\Database\Seeder;

class BuildingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Building::truncate();

        $faker = \Faker\Factory::create();

        // And now, let's create a few buildings in our database:
        for ($i = 0; $i < 5; $i++) {
            Building::create([
                'name' => $faker->unique()->word,
                'address' => $faker->address,
                'capacity_max' => $faker->randomDigit
            ]);
        }
    }
}
