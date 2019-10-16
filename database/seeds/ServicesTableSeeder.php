<?php

namespace App\Seeds;

use App\{Service, User};
use Illuminate\Database\Seeder;

class ServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Service::truncate();

        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 5; $i++)
        {
            Service::create([
                'name' => $faker->word,
                'description' => $faker->sentence,
                'cost' => $faker->randomFloat(2, 0, 1000),
                'created_by' => $faker->numberBetween(1, User::count()),
            ]);
        }
    }
}
