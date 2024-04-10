<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Suspension>
 */
class SuspensionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'startdate' => $this->faker->date(),
            'enddate' => $this->faker->date(),
            'returndate' => $this->faker->date(),
            'observations' => $this->faker->sentence(5),
            'employee_id' => $this->faker->numberBetween(1,50)
        ];
    }
}
