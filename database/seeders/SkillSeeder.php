<?php

namespace Database\Seeders;

use App\Models\Skill;
use Illuminate\Database\Seeder;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $skills = [
            [
                'name' => 'Manual Testing',
            ],
            [
                'name' => 'SDLC/STLC',
            ],
            [
                'name' => 'Agile/Scrum',
            ],
            [
                'name' => 'Test case/Plan/Strategy',
            ],
            [
                'name' => 'Java Programming Language',
            ],
            [
                'name' => 'OOP (Object Oriented Programming Concept)',
            ],
            [
                'name' => 'Selenium WebDriver',
            ],
            [
                'name' => 'Page Object Model',
            ],
            [
                'name' => 'Java Library: ODBC',
            ],
            [
                'name' => 'Java Library: Apache POI',
            ],
            [
                'name' => 'TestNG',
            ],
            [
                'name' => 'Cucumber',
            ],
            [
                'name' => 'Custom/Hybrid Framework',
            ],
            [
                'name' => 'Git/GitHub',
            ],
            [
                'name' => 'Jenkins',
            ],
            [
                'name' => 'SQL',
            ],
            [
                'name' => 'Web Service Testing (API)',
            ],
        ];

        foreach ($skills as $skill) {
            Skill::create($skill);
        }
    }
}
