<?php

use App\Job;
use Illuminate\Database\Seeder;

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

        for ($i = 0; $i < 20; $i++) {
            Job::create([
                'employer_id' => $faker->randomDigit,
                'category_id' => $faker->randomDigit,
                'position' => $faker->word,
                'location' => $faker->city,
                'description' => $faker->text($maxNbChars = 300),
                'salary_start' => $faker->numberBetween($min = 1000, $max = 2000),
                'salary_end' => $faker->numberBetween($min = 3000, $max = 10000),
                'min_experience' => $faker->numberBetween($min = 1, $max = 8),
                'required_skills' => $faker->text($maxNbChars = 300),
                'nice_to_have_skills' => $faker->text($maxNbChars = 300),
                'expires_at' => $faker->dateTime($max = 'now', $timezone = null)
            ]);
        }
    }
}