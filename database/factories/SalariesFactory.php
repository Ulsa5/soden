<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Salaries>
 */
class SalariesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'amount' => $this->faker->randomFloat(),
            'incentivebonus' => $this->faker->randomFloat(),
            'positionbonus' => $this->faker->randomFloat(),
            'yearsalary' => $this->faker->randomFloat(),
            'salarytype_id' => $this->faker->numberBetween(1,5),
            'employee_id' => $this->faker->numberBetween(1,50)
        ];
    }
}
