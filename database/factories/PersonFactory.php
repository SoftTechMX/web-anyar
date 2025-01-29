<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Person>
 */
class PersonFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'            => $this->faker->firstName(), // Nombre aleatorio
            'last_name'       => $this->faker->lastName(), // Apellido aleatorio
            'birthday'        => $this->faker->date('Y-m-d', '-18 years'), // Fecha de nacimiento (mayor de 18 años)
            'profile_picture' => $this->faker->imageUrl(250, 250, 'people', true, 'Profile'), // URL de imagen aleatoria
            'bio'             => $this->faker->sentence(10), // Biografía aleatoria
        ];
    }
}
