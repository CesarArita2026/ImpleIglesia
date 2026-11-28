<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lider extends Model
{
    protected $fillable = [
        'nombre',
        'apellido',
        'telefono',
        'contraseña',
        'pastor_id',
    ];

    public function asistencia_liders()
    {
        return $this->hasMany(AsistenciaLider::class);
    }

    public function pastor()
    {
        return $this->belongsTo(Pastor::class);
    }

    public function asistentes()
    {
        return $this->hasMany(Asistente::class);
    }
}
