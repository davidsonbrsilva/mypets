<?php

namespace App\Seeds;

use App\{Animal, AnimalType, AnimalBleed, User};
use Illuminate\Database\Seeder;

class AnimalsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Animal::truncate();

        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 25; $i++)
        {
            Animal::create([
                'username' => $faker->userName,
                'name' => $faker->firstName,
                'birthday' => $faker->date,
                'bio' => $faker->sentence,
                'profile_photo' => $faker->imageUrl(),
                'cover_photo' => $faker->imageUrl(),
                'animal_type' => $faker->numberBetween(1, AnimalType::count()),
                'animal_bleed' => $faker->numberBetween(1, AnimalBleed::count()),
            ]);
        }
    }
}
