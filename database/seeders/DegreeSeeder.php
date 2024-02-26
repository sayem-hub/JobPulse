<?php

namespace Database\Seeders;

use App\Models\Degree;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DegreeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $degrees = [
           'SSC' => 'Secondary School Certificate',
           'HSC' => 'Higher Secondary School Certificate',
           'Diploma' => 'Diploma',
           'BA/Honours' => 'Bachelor of Arts/Honours',
           'MA/Honours' => 'Master of Arts/Honours',
           'B.Sc/Any' => 'Bachelor of Science',
           'M.Sc/Any' => 'Master of Science',
           'BBA' => 'Bachelor of Business Administration',
           'MBA' => 'Master of Business Administration',
           'B.Sc in CSE' => 'Bachelor of Science in Computer Science & Engineering',
           'M.Sc in CSE' => 'Master of Science in Computer Science & Engineering',
           'B.Sc in IT' => 'Bachelor of Science in Information Technology',
           'M.Sc in IT' => 'Master of Science in Information Technology',
           'B.Sc in CIVIL' => 'Bachelor of Science in Civil Engineering',
           'M.Sc in CIVIL' => 'Master of Science in Civil Engineering',
           'B.Sc in MECHANICAL' => 'Bachelor of Science in Mechanical Engineering',
           'M.Sc in MECHANICAL' => 'Master of Science in Mechanical Engineering',
           'B.Sc in EEE' => 'Bachelor of Science in Electrical & Electronics Engineering',
           'M.Sc in EEE' => 'Master of Science in Electrical & Electronics Engineering',
           'M.Phil' => 'Master of Philosophy',
           'PhD' => 'Doctor of Philosophy',
       ];

       foreach ($degrees as $key => $degree) {
           Degree::create([
               'name' => $key,
               'description' => $degree
           ]);
       }
      
    }
}
