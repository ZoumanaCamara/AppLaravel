<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        return [
            "name" => fake()->name(),
            "price" => fake()->numberBetween(1000, 100000), 
            "quantity" => fake()->numberBetween(1, 20),
            "created_at" => fake()->dateTimeBetween("-2 years"), 
            "updated_at" => fake()->dateTimeBetween("-2 years"), 
        ];
    }
}
