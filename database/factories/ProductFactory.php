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
            'description' => $this->faker->paragraph, 
            'price' => $this->faker->randomFloat(2, 10, 1000), 
            'stock' => $this->faker->numberBetween(0, 100),
            'image' => $this->faker->imageUrl(4000, 4000, 'products', true, 'Faker', false),
            'category_id' => Category::get()->random()->id, 
            'brand_id' => Brand::get()->random()->id,
        ];
    }
}
