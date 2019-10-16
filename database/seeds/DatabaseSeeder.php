<?php

use App\Seeds\{
    AddressTableSeeder,
    UsersTableSeeder,
    ServicesTableSeeder,
    StatusesTableSeeder,
    AnimalBleedsTableSeeder,
    AnimalTypesTableSeeder,
    AnimalsTableSeeder,
    ServiceOrdersTableSeeder,
    UsersAnimalsTableSeeder,
    ServiceOrdersAnimalsTableSeeder
};

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * 
     * @return void
     */
    public function run()
    {
        Model::unguard();

        DB::statement('SET FOREIGN_KEY_CHECKS=0');

        $this->call([
            AddressTableSeeder::class,
            UsersTableSeeder::class,
            ServicesTableSeeder::class,
            StatusesTableSeeder::class,
            AnimalBleedsTableSeeder::class,
            AnimalTypesTableSeeder::class,
            AnimalsTableSeeder::class,
            ServiceOrdersTableSeeder::class,
            UsersAnimalsTableSeeder::class,
            ServiceOrdersAnimalsTableSeeder::class
        ]);

        DB::statement('SET FOREIGN_KEY_CHECKS=1');

        Model::reguard();
    }
}