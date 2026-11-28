<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Asistente extends Model
{
    protected $fillable = [
        'nombre',
        'apellido',
        'telefono',
        'contraseña',
        'inventario_id',
        'lider_id',
    ];

    public function inventarios()
    {
        return $this->belongsTo(Inventario::class);
    }

    public function liders()
    {
        return $this->belongsTo(Lider::class);
    }

    public function asistencia_liders()
    {
        return $this->hasMany(AsistenciaLider::class);
    }

    public function registro_familias()
    {
        return $this->hasMany(RegistroFamilia::class);
    }
}
