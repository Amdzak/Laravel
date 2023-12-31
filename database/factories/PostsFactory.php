<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Posts>
 */
class PostsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "judul" => $this->faker->sentence(mt_rand(2,9)),
            "slug" => $this->faker->slug(),
            "excerpt" => $this->faker->paragraph(),
            // "content" => $this->faker->paragraph(mt_rand(3,7)),
            "content" => collect($this->faker->paragraphs(mt_rand(3,7)))->map(fn($p) => "<p>$p</p>")->implode(''),
            "user_id" => mt_rand(1,3),
            "category_id" => mt_rand(1,2),
        ];
    }
}
