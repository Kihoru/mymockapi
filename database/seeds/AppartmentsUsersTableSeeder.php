<?php

use App\AppartmentUser;
use Illuminate\Database\Seeder;

class AppartmentsUsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AppartmentUser::truncate();

        $faker = \Faker\Factory::create();

        // And now, let's create a few AppartmentUsers in our database:
        for ($i = 0; $i < 33; $i++) {
            AppartmentUser::create([
                'user_id' => $faker->unique()->numberBetween(1, 33),
                'appartment_id' => $faker->numberBetween(1, 22)
            ]);
        }
    }
}
