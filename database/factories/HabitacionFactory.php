<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Habitacion>
 */
class HabitacionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nro_habitacion' => $this->faker->numberBetween(1, 100),
            'tipo' => $this->faker->randomElement(['individual', 'doble', 'suite']),
            'precio' => $this->faker->numberBetween(50, 500),
            'descripcion' => $this->faker->sentence(),
            'disponibilidad' => $this->faker->numberBetween(0, 1),
        ];
    }
}
