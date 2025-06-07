<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Recurso extends Model
{
    use SoftDeletes;
    protected $table = 'recursos';
    protected $fillable = [
        'clases_id',
        'nombre',
        'descripcion',
        'imagen',
        'video',
        'type',
        'url',
        'estatus',
    ];

    public function clase(): BelongsTo
    {
        return $this->belongsTo(Clase::class, 'clases_id', 'id');
    }

}
