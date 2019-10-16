<?php

namespace App\Seeds;

use App\{Status, User};
use Illuminate\Database\Seeder;

class StatusesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Status::truncate();

        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 5; $i++)
        {
            Status::create([
                'name' => $faker->word,
                'description' => $faker->sentence,
                'created_by' => $faker->numberBetween(1, User::count()),
            ]);
        }
    }
}
