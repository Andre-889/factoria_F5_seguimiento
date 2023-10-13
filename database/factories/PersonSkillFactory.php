<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\PersonSkill;
use App\Models\Skill;

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
        $skill = Skill::inRandomOrder()->first();

        return [
            'person_id' => $this->faker->numberBetween(1, 10), 
            'skill_id' => $skill ? $skill->id : Skill::factory()->create()->id,
            'level' => $this->faker->numberBetween(1, 7),
        ];
    }
}
