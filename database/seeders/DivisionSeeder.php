<?php

namespace Database\Seeders;

use App\Models\Division;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DivisionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $divisions = [
            'Dhaka',
            'Chittagong',
            'Sylhet',
            'Rajshahi',
            'Khulna',
            'Barishal',
            'Rangpur',
            'Mymensingh'
        ];

        foreach ($divisions as $division) {
            Division::create([
                'division_name' => $division
            ]);
        }
    }
}
