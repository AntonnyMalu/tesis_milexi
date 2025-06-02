<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Clase extends Model
{
    use SoftDeletes;

    protected $table = 'clases';
    protected $fillable = [
        'nombre',
        'descripcion',
        'imagen',
        'edad_min',
        'edad_max',
    ];

    public function recursos(): HasMany
    {
        return $this->hasMany(Recurso::class, 'clases_id', 'id');
    }

}
