<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name = $this->faker->unique()->word(); // Genera una palabra única
        
        return [
            'name' => ucfirst($name), // Capitaliza el nombre
            'slug' => Str::slug($name), // Genera un slug a partir del nombre
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
