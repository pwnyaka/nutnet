<?php

use Faker\Factory;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert($this->getData());
    }

    public function getData(): array
    {
        $data = [];

        $faker = Faker\Factory::create('ru_RU');

        for ($i = 0; $i < 5; $i++) {
            if ($i == 0) {
                $data[] = [
                    'name' => 'admin',
                    'email' => 'admin@mail.ru',
                    'password' => Hash::make('123'),
                    'is_admin' => 1,
                ];
            } elseif ($i == 1) {
                $data[] = [
                    'name' => 'user',
                    'email' => 'user@mail.ru',
                    'password' => Hash::make('123'),
                    'is_admin' => 0,
                    ];
            } else {
                $data[] = [
                    'name' => $faker->firstName,
                    'email' => $faker->email,
                    'password' => Hash::make('123'),
                    'is_admin' => 0,
                ];
            }
        }
        return $data;
    }
}
