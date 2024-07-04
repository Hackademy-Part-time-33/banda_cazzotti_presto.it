<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => Str::ucfirst(fake()->words(rand(1,5),true)),
            'description' =>fake()->words(rand(24,50),true),
            'price' => fake()->randomFloat(2, 9, 500),
            'category_id' => rand(1,Category::all()->count()),
            'user_id' => User::factory() ,
        ];
    }
}
