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
    public function definition()
    {
        return [
            'user_id' => $this->faker->unique()->name(),
            'order_id' => $this->faker->unique()->name(),
            'address' => $this->faker->name(),
            'postcode' => $this->faker->name(),
            'city' => $this->faker->name(),
            'county' => $this->faker->name(),
        ];
    }
}
