<?php

namespace Database\Factories;

use App\Models\Evaluation;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\EvaluationStack;
use App\Models\Stack;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\EvaluationStack>
 */
class EvaluationStackFactory extends Factory
{
    protected $model = EvaluationStack::class;

    public function definition()
    {
        $stack = Stack::inRandomOrder()->first();
        $evaluation= Evaluation::inRandomOrder()->first();

        return [
            'evaluation_id' => $evaluation ? $evaluation->id : Evaluation::factory()->create()->id,
            'level' => $this->faker->numberBetween(1, 7),
            'stack_id' => $stack ? $stack->id : Stack::factory()->create()->id,
            
        ];
    }
}
