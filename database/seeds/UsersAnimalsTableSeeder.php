<?php

namespace App\Seeds;

use App\{UserAnimal, User, Animal};
use Illuminate\Database\Seeder;

class UsersAnimalsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UserAnimal::truncate();

        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 25; $i++)
        {
            UserAnimal::create([
                'user' => $faker->numberBetween(1, User::count()),
                'animal' => $faker->numberBetween(1, Animal::count()),
            ]);
        }
    }
}
