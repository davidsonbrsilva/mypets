<?php

namespace App\Seeds;

use App\{AnimalType, User};
use Illuminate\Database\Seeder;

class AnimalTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AnimalType::truncate();

        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 10; $i++)
        {
            AnimalType::create([
                'name' => $faker->word,
                'description' => $faker->sentence,
                'created_by' => $faker->numberBetween(1, User::count()),
            ]);
        }
    }
}
