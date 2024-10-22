<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Categoria>
 */
class CategoriaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' => $this->faker->word(), // Nombre de la categoría
            'descripcion' => $this->faker->sentence(), // Descripción de la categoría
            'activa' => $this->faker->boolean(), // Estado activo/inactivo
            'descuento' => $this->faker->randomFloat(2, 0, 100),
        ];
    }
}
