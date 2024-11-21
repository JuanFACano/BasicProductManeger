<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


class ProductFactory extends Factory
{

    public function definition(): array
    {
        return [
            'identity' => fake()->numerify('#########'),
            'name' => ucfirst(fake()->word() . ' ' . fake()->randomElement(['Gamer', 'Casual', 'Premium', 'Deluxe'])),
            'price' => fake()->randomNumber(6),
            'description' => fake()->sentence(),
            'stock' => fake()->numberBetween(0, 15)
        ];
    }
}
