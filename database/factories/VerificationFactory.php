<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Verification>
 */
class VerificationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'type' => $this->faker->name(),
            'date' => $this->faker->date(),
            'result' => $this->faker->sentence(5),
            'recomendation' => $this->faker->sentence(5),
            'employee_id' => $this->faker->numberBetween(1,50)
        ];
    }
}
