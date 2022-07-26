<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Contact>
 */
class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [

            'fname' => $this->faker->name(),
            'lname' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'message' => $this->faker->name(),
            //
        ];
    }
}
