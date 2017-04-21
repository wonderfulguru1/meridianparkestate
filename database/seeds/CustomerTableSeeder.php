<?php

use Illuminate\Database\Seeder;
use Faker\Factory;
use App\Customer;

class CustomerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();

        Customer::truncate();

        foreach(range(1, 25) as $i) {
            Customer::create([
                'name' => $faker->name,
                'mobile' => $faker->phoneNumber,
                'email' => $faker->email,
            ]);
        }
    }
}
