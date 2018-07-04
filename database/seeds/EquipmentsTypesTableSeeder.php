<?php

use App\EquipmentsTypes;
use Illuminate\Database\Seeder;

class EquipmentsTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        EquipmentsTypes::truncate();

        $faker = \Faker\Factory::create();

        $types = ['Petit éléctroménager', 'Gros éléctroménager', 'Meuble', 'Multimédia'];

        for($i=0;$i<count($types);$i++) {
            EquipmentsTypes::create([
                'name' => $types[$i]
            ]);
        }
    }
}
