<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsuarioComun extends Model
{
    use HasFactory;

    protected $table = "usuario_comun";

    protected $fillable = [
        'nombre',
        'apellido',
        'email',
        // 'email_verified_at',
        'password',
        // 'remember_token'
    ];
}
