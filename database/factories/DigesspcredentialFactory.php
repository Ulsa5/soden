<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Digesspcredential>
 */
class DigesspcredentialFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nasp' => $this->faker->phoneNumber(),
            'clasification' => $this->faker->name(),
            'extenddate' => $this->faker->date(),
            'expirationdate' => $this->faker->date(),
            'comments' => $this->faker->sentence(5),
            'employee_id' => $this->faker->numberBetween(1,50)
        ];
    }
}
