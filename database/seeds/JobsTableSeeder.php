<?php

use Illuminate\Database\Seeder;
use App\Job;

class JobsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Job::truncate();
        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 10; $i++) {
            Job::create([
                'employer_id' => $faker->randomDigit,
                'category_id' => 2,
                'position' => $faker->sentence($nbWords = 3),
                'location' => $faker->sentence,
            ]);
        }
    }
}