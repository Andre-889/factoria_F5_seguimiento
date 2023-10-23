<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        \App\Models\BootcampStack::factory(5)->create();
        \App\Models\Category::factory(5)->create();
        \App\Models\CoderFeedback::factory(5)->create();
        \App\Models\Evaluation::factory(5)->create();
        \App\Models\EvaluationStack::factory(5)->create();
        \App\Models\PersonalInformation::factory(5)->create();
        \App\Models\PersonSkill::factory(5)->create();
        \App\Models\ProfessionalInformation::factory(5)->create();
        \App\Models\ProjectsWorkshop::factory(5)->create();
        \App\Models\Skill::factory(5)->create();
        \App\Models\Stack::factory(5)->create();


        \App\Models\User::factory(5)->create();

        \App\Models\User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}
