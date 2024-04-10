<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Vaccine>
 */
class VaccineFactory extends Factory
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
            'vaccine' => $this->faker->name(),
            'dosis' => $this->faker->name(),
            'comments' => $this->faker->sentence(5),
            'employee_id' => $this->faker->numberBetween(1,50)
        ];
    }
}
