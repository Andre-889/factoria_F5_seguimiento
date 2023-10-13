<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Evaluation;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Evaluation>
 */
class EvaluationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'date' => $this->faker->date, 
            'type' => $this->faker->randomElement(['midterm', 'final']), 
            'mean' => $this->faker->randomFloat(2, 0, 100), 
            'person_id' => $this->faker->numberBetween(1, 10), 
            'user_id' => $this->faker->numberBetween(1, 10), 
        ];
    }
}
