<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\EvaluationStack;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\EvaluationStack>
 */
class EvaluationStackFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'evaluation_id' => function () {
                return factory(App\Models\Evaluation::class)->create()->id;
            },
            'stack_id' => function () {
                return factory(App\Models\Stack::class)->create()->id;
            },
            'level' => $this->faker->numberBetween(1, 5), 
        ];
    }
}
