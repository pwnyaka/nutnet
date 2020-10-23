<?php

use Faker\Factory;
use Illuminate\Database\Seeder;

class TracksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tracks')->insert($this->getData());
    }

    public function getData(): array
    {
        $data = [];

        $faker = Faker\Factory::create('en_EN');

        for ($i = 0; $i < 200; $i++) {

            $data[] = [
                'title' => $faker->text(20),
                'audio_record_id' => rand(1, 30),
            ];
        }
        return $data;
    }
}
