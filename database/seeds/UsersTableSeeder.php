<?php

namespace App\Seeds;

use App\{ User, Address };
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();

        $faker = \Faker\Factory::create();

        $password = Hash::make('1234');

        User::create([
            'username' => 'admin',
            'name' => 'Davidson',
            'last_name' => 'Bruno',
            'email' => 'davidsonbruno@outlook.com',
            'password' => $password,
            'birthday' => '1996-09-14',
            'address' => $faker->numberBetween(1, Address::count()),
            'phone' => $faker->phoneNumber,
            'is_admin' => true,
            'is_caregiver' => false,
        ]);

        for ($i = 0; $i < 10; $i++)
        {
            User::create([
                'username' => $faker->userName,
                'name' => $faker->firstName,
                'last_name' => $faker->lastName,
                'email' => $faker->email,
                'password' => $faker->password,
                'birthday' => $faker->date,
                'address' => $faker->numberBetween(1, Address::count()),
                'phone' => $faker->phoneNumber,
                'is_admin' => $faker->boolean,
                'is_caregiver' => $faker->boolean,
            ]);
        }
    }
}
