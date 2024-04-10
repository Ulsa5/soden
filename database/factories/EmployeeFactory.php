<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */
class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'enterprise_id' => $this->faker->numberBetween(1,5),
            'name' => $this->faker->name(),
            'surname' => $this->faker->name(),
            'email' => $this->faker->email(),
            'birth' => $this->faker->date(),
            'bloodtype_id' => $this->faker->numberBetween(1,8),
            'startdate' => $this->faker->date(),
            'enddate' => $this->faker->date(),
            'nit' => $this->faker->numberBetween(10000000,999999999),
            'irtra' => $this->faker->numberBetween(10000000,999999999),
            'civilstatus_id' => $this->faker->numberBetween(1,5),

            'position_id' => $this->faker->numberBetween(1,15),
            'department_id' => $this->faker->numberBetween(1,22),
            'municipality_id' => $this->faker->numberBetween(1,5),

            'igss' => $this->faker->numberBetween(10000000,999999999),
            'telephone' => $this->faker->phoneNumber()
        ];
    }
}
