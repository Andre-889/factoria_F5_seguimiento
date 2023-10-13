<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\CoderFeedback;


class CoderFeedbackFactory extends Factory
{

    public function definition(): array
    {
        return [
            'text' => $this->faker->paragraph, 
            'person_id' => $this->faker->numberBetween(1, 10), 
            'user_id' => $this->faker->numberBetween(1, 10), 
            'date' => $this->faker->date, 
            'observations' => $this->faker->text, 
            'improve' => $this->faker->text, 
        ];
    }
}
