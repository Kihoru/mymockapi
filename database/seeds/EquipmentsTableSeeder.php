<?php

use App\Equipments;
use Illuminate\Database\Seeder;

class EquipmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Equipments::truncate();

        $faker = \Faker\Factory::create();

        // And now, let's create a few Equipments in our database:
        for ($i = 0; $i < 50; $i++) {
            Equipments::create([
                'name' => $faker->word,
                'price' => $faker->numberBetween(1, 1000),
                'appartment_id' => $faker->numberBetween(1, 22),
                'equipment_type_id' => $faker->numberBetween(1, 4)
            ]);
        }
    }
}
