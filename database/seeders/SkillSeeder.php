<?php

namespace Database\Seeders;

use App\Models\Skill;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $skills = [
            'Java', 'HTML', 'CSS', 'JavaScript', 'PHP', 'Laravel', 'NodeJs', 'ExpressJs', 'ReactJs', 'VueJs', 'Mysql', 'Postgresql', 'MongoDB', 'SQL', 'Python', 'C++', 'Accounting', 'Marketing', 'Digital Marketing', 'SEO', 'Content Writing', 'Copy Writing', 'Graphics Design', 'Sales', 'Other'
        ];

        foreach ($skills as $skill) {
            Skill::create([
                'skill_name' => $skill
            ]);
        }
        
    }
}
