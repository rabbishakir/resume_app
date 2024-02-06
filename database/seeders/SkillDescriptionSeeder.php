<?php

namespace Database\Seeders;

use App\Models\SkillDescription;
use Illuminate\Database\Seeder;

class SkillDescriptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SkillDescription::create([
            'skill_id'    => 1,
            'description' => 'Involved in complete software testing life cycle, owning the test deliverables from start to end through the entire SDLC.',
        ]);

        SkillDescription::create([
            'skill_id'    => 1,
            'description' => 'Experienced in methodologies like Waterfall and Agile (SCRUM).',
        ]);

    }
}
