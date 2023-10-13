<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class SkillFactory extends Factory
{
    protected $model = \App\Models\Skill::class;

    public function definition()
    {
        return [
            'name' => $this->faker->unique()->word(),
            'category_id' => Category::factory(), // Esto crea una nueva categoría cada vez
        ];
    }
}




