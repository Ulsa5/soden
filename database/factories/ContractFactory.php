<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Contract>
 */
class ContractFactory extends Factory
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
            'contractdocument' => $this->faker->sentence(6),
            'confidentiallitydocument' => $this->faker->sentence(6),
            'enterprise_id' => $this->faker->numberBetween(1,5),
            'employee_id' => $this->faker->numberBetween(1,50)
        ];
    }
}
