<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    public function definition(): array
    {
        $category = Category::inRandomOrder()->first();

        $subcategory = $category->subcategories()->inRandomOrder()->first();

        return [
            'user_id' => User::inRandomOrder()->value('id') ?? User::factory(),
            'category_id' => $category->id,
            'subcategory_id' => $subcategory?->id,
            'title' => ucfirst(fake()->words(3, true)),
            'description' => fake()->paragraphs(2, true),
            'price' => fake()->randomFloat(2, 5, 2000),
            'image' => null,
        ];
    }
}
