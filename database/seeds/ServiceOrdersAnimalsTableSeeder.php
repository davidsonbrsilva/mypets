<?php

namespace App\Seeds;

use App\{ServiceOrderAnimal, ServiceOrder, Animal};
use Illuminate\Database\Seeder;

class ServiceOrdersAnimalsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ServiceOrderAnimal::truncate();

        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 60; $i++)
        {
            ServiceOrderAnimal::create([
                'service_order' => $faker->numberBetween(1, ServiceOrder::count()),
                'animal' => $faker->numberBetween(1, Animal::count())
            ]);
        }
    }
}
