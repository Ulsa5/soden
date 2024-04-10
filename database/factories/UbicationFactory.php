<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Ubication;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ubication>
 */

class UbicationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'ubicationtype_id' => $this->faker->numberBetween(1,2),
            'name' => $this->faker->name(),
            'address' => $this->faker->address(),
            'contactname' => $this->faker->name(),
            'contactemail' => $this->faker->email(),
            'contactphone' => $this->faker->phoneNumber(),
            'employee_id' => $this->faker->numberBetween(1,20)
        ];
    }
}
