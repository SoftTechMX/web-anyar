<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AppModelsPreguntaFrecuente>
 */
class PreguntaFrecuenteFactory extends Factory
{

    protected $model = \App\Models\PreguntaFrecuente::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
         return [
            'pregunta'      => $this->faker->sentence(10), // Genera una pregunta aleatoria
            'respuesta'     => $this->faker->paragraph(3), // Genera una respuesta aleatoria
            'created_at'    => now(),
            'updated_at'    => now(),
        ];
    }
}
