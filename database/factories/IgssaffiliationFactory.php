<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Igssaffiliation>
 */
class IgssaffiliationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'filial'=>$this->faker->numberBetween(1,5),
            'startdate' => $this->faker->date(),
            'enddate' => $this->faker->date(),
            'employee_id' => $this->faker->numberBetween(1,30),
            'enterprise_id'=>$this->faker->numberBetween(1,5)
        ];
    }
}
