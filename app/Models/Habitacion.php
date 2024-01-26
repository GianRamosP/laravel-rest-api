<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Habitacion extends Model
{
    use HasFactory;

    protected $table = 'habitacion';
    protected $primaryKey = 'id_habitacion';

    protected $fillable = [
        'nro_habitacion',
        'tipo',
        'precio',
        'descripcion',
        'disponibilidad',
    ];
}
