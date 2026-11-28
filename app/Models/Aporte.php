<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Aporte extends Model
{
    protected $fillable = [
        'fecha_recibido',
        'cantidad',
        'tipo_aporte',
        'tesorero_id',
        'registro_familia_id',
        'estado_cuenta_id',
    ];

    public function tesorero()
    {
        return $this->belongsTo(Tesorero::class);
    }

    public function registro_familia()
    {
        return $this->belongsTo(RegistroFamilia::class);
    }

    public function estado_cuenta()
    {
        return $this->belongsTo(EstadoCuenta::class);
    }

    public function tipo_billetes()
    {
        return $this->hasMany(TipoBillete::class);
    }
}
