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
            // 'body' => $this->faker->paragraphs(mt_rand(15, 30,)), (CARA PERTAMA)
            // 'body' => '<p>' . implode('</p><p>', $this->faker->paragraphs(mt_rand(15, 30,))) . '</p>', (CARA KEDUA)
            'body' => collect($this->faker->paragraphs(mt_rand(5, 15,)))
                ->map(fn ($p) => "<p>$p</p>")
                ->implode(''),
            'user_id' => mt_rand(1, 8),
            'category_id' => mt_rand(1, 6)
        ];
    }
}
