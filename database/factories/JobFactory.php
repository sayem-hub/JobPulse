<?php

namespace Database\Factories;

use Faker\Factory as Faker;

use App\Models\Job;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

     public function model()
     {
         return Job::class;
     }
 
    public function definition(): array
    {

        $faker = Faker::create();

        return [
            'company_id' => $faker->numberBetween(1, 10),
            'job_category_id' => $faker->numberBetween(1, 10),
            'job_type_id' => $faker->numberBetween(1, 10),
            'degree_id' => $faker->numberBetween(1, 10),
            'job_title' => $faker->jobTitle,
            'experience_level' => $faker->randomElement(['0-1 Year', '1-2 Years', '2-3 Years', '4-5 Years', '5+ Years']),
            'requirements' => $faker->paragraph,
            'responsibilities' => $faker->paragraph,
            'vacancy' => $faker->numberBetween(1, 10),
            'work_place' => $faker->randomElement(['Office', 'Hybrid', 'Remote']),
            'district_id' => $faker->numberBetween(1, 64), 
            'division_id' => $faker->numberBetween(1, 8),
            'salary_range' => $faker->randomFloat(2, 30000, 100000),
            'salary_review' => $faker->randomElement(['Yearly', 'Half-Yearly', 'Quarterly']),
            'festival_bonus' => $faker->boolean,
            'age_range' => $faker->numberBetween(20, 60),
            'gender' => $faker->randomElement(['Male', 'Female', 'Other']),
            'deadline' => $faker->dateTimeBetween('now', '+1 month'),
            'priority' => $faker->numberBetween(1, 5),
            'is_featured' => $faker->boolean(10),
            'number_of_applications' => $faker->numberBetween(0, 100),
            'status' => $faker->randomElement(['published', 'draft']),
            'published_at' => $faker->dateTimeBetween('-1 year', 'now'),

        ];
    }
}
