<?php

namespace Database\Seeders;

use App\Models\Skill;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Skill::create([
            'name' => 'Skills',
            'html' => 'HTML',
            'css' => 'CSS',
            'javascript' => 'Javascript',
            'php' => 'PHP',
            'laravel' => 'Laravel',
            'mysql' => 'MySql',
            'bootstrap' => 'Bootstrap',
            'c' => 'C#',
            'net' => 'ASP.NET',
            'status' =>'1'
        ]);
    }
}
