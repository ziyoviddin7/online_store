<?php

namespace Database\Factories;

use App\Models\Brand;
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
            'name' => $this->faker->sentence(3), 
            'slug' => $this->faker->unique()->slug,
            'description' => $this->faker->paragraph,
            'price' => $this->faker->randomFloat(2, 10, 1000),
            'stock' => $this->faker->numberBetween(0, 100),
            'image' => $this->faker->imageUrl(),
            'discount' => $this->faker->optional()->numberBetween(5, 50),
            'discount_start' => $this->faker->optional()->dateTimeBetween('-1 month', '+1 month'),
            'discount_end' => $this->faker->optional()->dateTimeBetween('+1 month', '+2 months'),
            'category_id' => Category::get()->random()->id,
            'brand_id' => Brand::get()->random()->id,
        ];
    }
}
