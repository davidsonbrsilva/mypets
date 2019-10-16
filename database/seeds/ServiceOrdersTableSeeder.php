<?php

namespace App\Seeds;

use App\{ServiceOrder, Animal, User, Status};
use Illuminate\Database\Seeder;

class ServiceOrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ServiceOrder::truncate();

        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 15; $i++)
        {
            ServiceOrder::create([
                'requested_by' => $faker->numberBetween(1, User::count()),
                'accepted_by' => $faker->numberBetween(1, User::count()),
                'status' => $faker->numberBetween(1, Status::count()),
                'animal' => $faker->numberBetween(1, Animal::count()),
            ]);
        }
    }
}
