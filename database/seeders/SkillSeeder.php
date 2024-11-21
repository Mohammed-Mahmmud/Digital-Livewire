<?php

namespace Database\Seeders;

use App\Models\Skill;
use function Laravel\Prompts\progress;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Skill::updateOrCreate(['name' => 'PHP'],[
            'name' => 'PHP',
            'progress' => '100'
        ]);
    }
}
