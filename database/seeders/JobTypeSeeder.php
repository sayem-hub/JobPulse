<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JobTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $jobTypes = [
            'Full Time',
            'Part Time',
            'Contract',
            'Internship',
            'Freelance',
            'Other',
        ];

        foreach ($jobTypes as $jobType) {
            \App\Models\JobType::create([
                'name' => $jobType
            ]);
        }
    }
}
