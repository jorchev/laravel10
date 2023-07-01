<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

// No es necesario indicar el modelo (use App\Models\Curso;) si se usa la convención

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Curso>
 */
class CursoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->sentence(), // Se puede llamar a la propiedad $this->faker o la función fake()
            'description' => fake()->paragraph(),
            'category' => fake()->randomElement(["Desarrollo web","Diseno web"])
        ];
    }
}
