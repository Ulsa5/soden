<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Address>
 */
class AddressFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'address' => $this->faker->address(),
            'department_id' => $this->faker->numberBetween(1,22),
            'municipality_id' => $this->faker->numberBetween(1,5),
            'employee_id' => $this->faker->numberBetween(1,50)
        ];
    }
}
