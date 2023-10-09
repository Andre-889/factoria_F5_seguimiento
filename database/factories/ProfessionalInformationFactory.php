<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\ProfessionalInformation;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProfessionalInformation>
 */
class ProfessionalInformationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'cv' => $this->faker->imageUrl(), 
            'person_id' => $this->faker->numberBetween(1, 10), 
            'is_working' => $this->faker->boolean, 
            'linkedin' => $this->faker->url,
            'is_studying' => $this->faker->boolean, 
            'next_bootcamp' => $this->faker->date(), 
            'github' => $this->faker->url, 
        ];
    }
}
