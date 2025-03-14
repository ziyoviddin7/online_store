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
            'name' => $this->faker->sentence(3), // Название продукта
            'slug' => $this->faker->unique()->slug, // Уникальный slug
            'description' => $this->faker->paragraph, // Описание продукта
            'price' => $this->faker->randomFloat(2, 10, 1000), // Цена от 10 до 1000
            'stock' => $this->faker->numberBetween(0, 100), // Количество на складе
            'image' => $this->faker->imageUrl(), // Ссылка на изображение
            'discount' => $this->faker->optional()->numberBetween(5, 50), // Скидка (может быть null)
            'discount_start' => $this->faker->optional()->dateTimeBetween('-1 month', '+1 month'), // Начало скидки
            'discount_end' => $this->faker->optional()->dateTimeBetween('+1 month', '+2 months'), // Конец скидки
            'category_id' => Category::get()->random()->id, // Связь с категорией
            'brand_id' => Brand::get()->random()->id, // Связь с брендом (может быть null)
        ];
    }
}
