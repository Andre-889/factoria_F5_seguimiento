<?php

namespace Database\Factories;

use App\Models\Skill;
use Illuminate\Database\Eloquent\Factories\Factory;

class StackFactory extends Factory
{
    protected $model = \App\Models\Stack::class;

    public function definition()
    {
        return [
            'name' => $this->faker->unique()->word(),
            'skill_id' => Skill::factory(), // Esto crea una nueva skill cada vez
        ];
    }
}