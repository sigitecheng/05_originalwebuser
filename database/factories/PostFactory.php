<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Whoops\Run;

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
            'title' => $this->faker->sentence(mt_rand(1, 10)),
            'slug' => $this->faker->slug(),
            'excerpt' => $this->faker->paragraph(),
            'body' => $this->faker->paragraph(mt_rand(5, 10,)),
            'user_id' => mt_rand(1, 6),
            'category_id' => mt_rand(1, 2)
        ];
    }
}