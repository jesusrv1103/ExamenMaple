<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->text(50),
            'category' => $this->faker->randomElement(['Veterinaria', 'Poesia']),
            'author' => $this->faker->name(),
            'realease_date' => now(),
            'publish_date' =>now(),
        ];

    }
}
