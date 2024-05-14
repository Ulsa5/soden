<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Extrahours>
 */
class ExtrahoursFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'date' => $this->faker->date(),
            'amount' => $this->faker->randomFloat(),
            'concept' => $this->faker->sentence(5),
            'employee_id' => $this->faker->numberBetween(1,50)
        ];
    }
}
