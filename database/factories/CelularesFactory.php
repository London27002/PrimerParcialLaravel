<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Categoria; 


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Celulares>
 */
class CelularesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'modelo' => $this->faker->word(),
            'marca' => $this->faker->randomElement(['Apple', 'Samsung', 'Huawei', 'Xiaomi']),
            'precio' => $this->faker->randomFloat(2, 500000, 5000000), // Entre 500 mil y 5 millones
            'stock' => $this->faker->numberBetween(1, 100),
            'fecha_venta' => $this->faker->date(),
            'en_oferta' => $this->faker->boolean(),
            'descripcion' => $this->faker->paragraph(),
            'color' => $this->faker->safeColorName(),
            'imei' => $this->faker->unique()->numerify('###############'), // 15 dígitos
            'categoria_id' => Categoria::factory(),
            
        ];
    }
}
