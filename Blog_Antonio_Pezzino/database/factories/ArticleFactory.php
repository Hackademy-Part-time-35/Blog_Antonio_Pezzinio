<?php

namespace Database\Factories;

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
            'title' => fake()->words(5, true),
            'user_id' => 1,
            'description' => fake()->word(10, true),
            'body' => fake()->words(50, true),
            'visible' => 1,

        ];
        //['title', 'user_id', 'description', 'body', 'visible'];
    }
}
