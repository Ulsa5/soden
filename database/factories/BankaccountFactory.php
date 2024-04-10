<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Bankaccount>
 */
class BankaccountFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'bank' => $this->faker->name(),
            'account' => $this->faker->phoneNumber(),
            'type' => $this->faker->name(),
            'employee_id' => $this->faker->numberBetween(1,50)
        ];
    }
}
