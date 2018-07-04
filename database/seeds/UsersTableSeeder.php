<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();

        $faker = \Faker\Factory::create();

        // And now, let's create a few Users in our database:
        for ($i = 0; $i < 33; $i++) {
            User::create([
                'name' => $faker->unique()->name(),
                'age' => $faker->numberBetween(2, 95),
                'telephone' => $faker->phoneNumber
            ]);
        }
    }
}
