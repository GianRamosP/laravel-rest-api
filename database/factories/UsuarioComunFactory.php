<?php

namespace Database\Factories;

use App\Models\UsuarioComun;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\UsuarioComun>
 */
class UsuarioComunFactory extends Factory
{
    protected static ?string $password;
    protected $model = UsuarioComun::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {


        return [
            'nombre' => fake()->name(),
            'apellido' => fake()->lastName(),
            'email' => fake()->unique()->safeEmail(),
            // 'email_verified_at' => now(),
            'password' => static::$password ??= Hash::make('password'),
            // 'remember_token' => Str::random(10),
        ];
    }
}
