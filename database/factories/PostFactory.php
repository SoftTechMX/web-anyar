<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\User;

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
            'title' => $this->faker->sentence(6, true),
            'image' => $this->faker->imageUrl(800, 600, 'posts', true, 'Post Image'),
            'content' => $this->faker->paragraphs(3, true),
            'id_author' => User::inRandomOrder()->first()?->id, // Elige un usuario aleatorio o null
        ];
    }
}
