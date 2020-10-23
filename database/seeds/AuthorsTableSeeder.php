<?php

use Faker\Factory;
use Illuminate\Database\Seeder;

class AuthorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('authors')->insert($this->getData());
    }

    public function getData(): array
    {
        $data = [];

        $faker = Faker\Factory::create('en_EN');

        for ($i = 0; $i < 10; $i++) {

                $data[] = [
                    'first_name' => $faker->firstName,
                    'last_name' => $faker->lastName,
                    'email' => $faker->email,
                ];
        }
        return $data;
    }
}
