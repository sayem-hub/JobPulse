<?php

namespace Database\Seeders;

use App\Models\JobCategory;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class JobCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $jobCategories = [
            'IT & Telecommunications',
            'Finance & Accounting',
            'Design',
            'Marketing',
            'Healthcare',
            'Education',
            'Hospitality & Catering',
            'Legal',
            'Sales & Retail',
            'Engineering',
            'Manufacturing',
            'Transport & Logistics',
            'Garments & Textiles',
            'Other',
        ];

        foreach ($jobCategories as $jobCategory) {
           JobCategory::create([
                'name' => $jobCategory,
                'description' => $jobCategory
            ]);
        }
    }
}
