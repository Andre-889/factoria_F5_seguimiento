<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\BootcampStack;

class BootcampStackFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'bootcamp_id' => $this->faker->numberBetween(1, 100), 
            'stack_id' => $this->faker->numberBetween(1, 100), 
        ];
    }
}
