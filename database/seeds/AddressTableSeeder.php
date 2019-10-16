<?php

namespace App\Seeds;

use App\Address;
use Illuminate\Database\Seeder;

class AddressTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Address::truncate();

        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 60; $i++)
        {
            Address::create([
                'street' => $faker->streetName,
                'number' => $faker->buildingNumber,
                'complement' => $faker->secondaryAddress,
                'neighborhood' => $faker->cityPrefix,
                'city' => $faker->city,
                'state' => $faker->state,
                'country' => $faker->country,
                'zip_code' => $faker->postcode,
            ]);
        }
    }
}
