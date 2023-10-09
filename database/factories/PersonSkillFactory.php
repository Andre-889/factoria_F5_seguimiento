<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\PersonSkill;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PersonSkill>
 */
class PersonSkillFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'person_id' => $this->faker->numberBetween(1, 10), 
            'skill_id' => function () {
                return factory(App\Models\Skill::class)->create()->id;
            },
            'level' => $this->faker->randomElement(['beginner', 'intermediate', 'advanced']),
        ];
    }
}
