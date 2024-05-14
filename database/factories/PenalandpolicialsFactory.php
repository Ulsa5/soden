<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Penalandpolicials>
 */
class PenalandpolicialsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $customtype1 = 'Policiaco';
        $customtype2 = 'Penal';

        return [
            'type' => $this->faker->name(),
            'number' => $this->faker->phoneNumber(),
            'verificator' => $this->faker->phoneNumber(),
            'extenddate' => $this->faker->date(),
            'expirationdate' => $this->faker->date(),
            'document' => $this->faker->sentence(5),
            'employee_id' => $this->faker->numberBetween(1,50)
        ];
    }
}
