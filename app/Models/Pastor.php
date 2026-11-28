<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pastor extends Model
{
    protected $fillable = [
        'nombre',
        'apellido',
        'telefono',
        'contraseña',
    ];

    public function tesoreros()
    {
        return $this->hasMany(Tesorero::class);
    }

    public function asistencia_liders()
    {
        return $this->hasMany(AsistenciaLider::class);
    }

    public function liders()
    {
        return $this->hasMany(Lider::class);
    }
}
