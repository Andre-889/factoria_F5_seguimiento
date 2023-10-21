<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\ProjectsWorkshop;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProjectsWorkshop>
 */
class ProjectsWorkshopFactory extends Factory
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
            'project_name' => $this->faker->sentence(), 
            'observations' => $this->faker->text(200),
            'user_id' => $this->faker->numberBetween(1, 4),  
            'submission_date' => $this->faker->date(), 
        ];
    }
}
