<?php

namespace Database\Factories;

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
            'company' => fake()->company(),
            'model' => fake()->word(),
            'price' => fake()->randomFloat(2, 100, 10000),
            'description' => fake()->sentence(),
            'in_stock' => fake()->boolean(),
            'sku_id' => fake()->unique()->uuid(),
        ];
    }
}
