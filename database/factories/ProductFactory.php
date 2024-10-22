<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->text(30),
            'category_id' => Category::all()->random()->id,
            'description' => fake()->text(),
            'quantity' => fake()->randomNumber(),
            'price' => fake()->randomFloat(),
            'discount' => fake()->numberBetween(0, 15),
            'featured' => fake()->boolean(),
            'rating' => fake()->randomFloat(2, 0, 5),
        ];
    }
}
