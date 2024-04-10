<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Dpi>
 */
class DpiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'number' => $this->faker->phoneNumber(),
            'extenddate' => $this->faker->date(),
            'expirationdate' => $this->faker->date(),
            'document' => $this->faker->sentence(5),
            'employee_id' => $this->faker->numberBetween(1,50),
            'department_id' => $this->faker->numberBetween(1,22),
            'municipality_id' => $this->faker->numberBetween(1,5)
        ];
    }
}
