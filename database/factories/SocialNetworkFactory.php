<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SocialNetworks>
 */
class SocialNetworkFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'facebook'  => $this->faker->url(), // URL aleatoria para Facebook
            'tiktok'    => $this->faker->url(), // URL aleatoria para TikTok
            'linkedin'  => $this->faker->url(), // URL aleatoria para LinkedIn
            'github'    => $this->faker->url(), // URL aleatoria para GitHub
            'instagram' => $this->faker->url(), // URL aleatoria para Instagram
            'telegram'  => $this->faker->url(), // URL aleatoria para Telegram
            'youtube'   => $this->faker->url(), // URL aleatoria para YouTube
            'snapchat'  => $this->faker->url(), // URL aleatoria para Snapchat
            'id_person' => \App\Models\Person::factory(), // Relación con la tabla people
        ];
    }
}
