<?php

namespace App\Seeds;

use App\{AnimalBleed, User};
use Illuminate\Database\Seeder;

class AnimalBleedsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AnimalBleed::truncate();

        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 60; $i++)
        {
            AnimalBleed::create([
                'name' => $faker->word,
                'description' => $faker->sentence,
                'managed_by' => $faker->numberBetween(1, User::count()),
                'requested_by' => $faker->numberBetween(1, User::count()),
            ]);
        }
    }
}
