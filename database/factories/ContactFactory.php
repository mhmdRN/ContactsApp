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
            'lastName'=>$this->faker->firstName(),
            'firstName'=>$this->faker->lastName(),
            'email'=>$this->faker->email(),
            'phone'=>$this->faker->phoneNumber(),
            'address'=>$this->faker->address(),
        ];
    }
}
