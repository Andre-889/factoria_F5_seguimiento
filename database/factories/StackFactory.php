<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Stack;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Stack>
 */
class StackFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->unique()->word(), 
            'skill_id' => function () {
                return factory(App\Models\Skill::class)->create()->id;
            },
        ];
    }
}
