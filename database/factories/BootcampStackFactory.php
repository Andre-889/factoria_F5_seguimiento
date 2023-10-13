<?php

namespace Database\Factories;

use App\Models\BootcampStack;
use App\Models\Stack;
use Illuminate\Database\Eloquent\Factories\Factory;

class BootcampStackFactory extends Factory
{
    protected $model = BootcampStack::class;

    public function definition()
    {
        $stack = Stack::inRandomOrder()->first();

        return [
            'bootcamp_id' => $this->faker->numberBetween(1, 100),
            'stack_id' => $stack ? $stack->id : Stack::factory()->create()->id,
        ];
    }
}
