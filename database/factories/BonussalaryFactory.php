<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Bonussalary>
 */
class BonussalaryFactory extends Factory
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
            'amount' => $this->faker->randomFloat(),
            'comment' => $this->faker->sentence(20),
            'employee_id' => $this->faker->numberBetween(1,50)
        ];
    }
}
