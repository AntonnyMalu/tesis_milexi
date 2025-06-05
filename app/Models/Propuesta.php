<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Propuesta extends Model
{
    protected $table = 'propuestas';
    protected $fillable = [
        'nombre',
        'correo',
        'descripcion',
        'url',
    ];
}
