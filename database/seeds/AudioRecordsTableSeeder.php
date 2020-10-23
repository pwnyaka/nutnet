<?php

use Faker\Factory;
use Illuminate\Database\Seeder;

class AudioRecordsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('audio_records')->insert($this->getData());
    }

    public function getData(): array
    {
        $data = [];

        $faker = Faker\Factory::create('ru_RU');

        for ($i = 0; $i < 30; $i++) {
            $data[] = [
                'title' => $faker->text(20),
                'author_id' => rand(1, 10),
                'release_year' => rand(1990, 2010),
            ];
        }
        return $data;
    }
}
