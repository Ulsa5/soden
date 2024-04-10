<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Insurance>
 */
class InsuranceFactory extends Factory
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
            'employee_id' => $this->faker->numberBetween(1,50),
            'enterprise_id' => $this->faker->numberBetween(1,5),
            'carrier_id' => $this->faker->numberBetween(1,2),
        ];
    }
}
