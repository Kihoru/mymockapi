<?php

use App\Appartment;
use Illuminate\Database\Seeder;

class AppartmentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Appartment::truncate();

        $faker = \Faker\Factory::create();

        // And now, let's create a few appartments in our database:
        for ($i = 0; $i < 22; $i++) {
            Appartment::create([
                'number' => $faker->unique()->numberBetween(1, 50),
                'floor' => $faker->numberBetween(1, 10),
                'size' => $faker->numberBetween(20, 45),
                'building_id' => rand(1, 5)
            ]);
        }
    }
}
