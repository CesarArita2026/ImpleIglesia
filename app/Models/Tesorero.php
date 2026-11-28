<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tesorero extends Model
{
    protected $fillable = [
        'nombre',
        'apellido',
        'telefono',
        'contraseña',
        'pastor_id',
    ];

    public function pastor()
    {
        return $this->belongsTo(Pastor::class);
    }

    public function aportes()
    {
        return $this->hasMany(Aporte::class);
    }
}
