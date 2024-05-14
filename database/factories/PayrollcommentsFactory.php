<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Payrollcomments>
 */
class PayrollcommentsFactory extends Factory
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
            'comment' => $this->faker->sentence(10),
            'payroll' => $this->faker->name(),
            'employee_id' => $this->faker->numberBetween(1,50)
        ];
    }
}
