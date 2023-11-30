<?php

namespace Database\Factories;

use App\Models\Admin;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Manager;
use App\Models\UsuarioComun;
use Illuminate\Support\Facades\Hash;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Manager>
 */
class ManagerFactory extends Factory
{
    protected $model = Manager::class;
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_usuario_comun' => UsuarioComun::inRandomOrder()->first()->id_usuario_comun,
            'id_admin' => Admin::inRandomOrder()->first()->id_admin,

            'nombre_hotel' => $this->faker->company(),
            'nombre_persona' => $this->faker->name(),
            'telefono' => $this->faker->phoneNumber(),
            'fecha_renovacion' => $this->faker->date(),
            'email' => $this->faker->unique()->safeEmail(),
            'password' => static::$password ??= Hash::make('password'),
        ];
    }
}
