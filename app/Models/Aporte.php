<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Aporte extends Model
{
    protected $fillable=[
        'fecha_recibido',
        'cantidad',
        'tipo_aporte',
        'tesorero_id',
        'registro_familia_id',
        'estado_cuenta_id'
    ];
    public function tesorero(){
        return $this->belongs(Tesorero::class);
    }
    public function registro_familia(){
        return $this->belongs(Registro_familia::class);
    }
    public function estado_cuenta(){
        return $this->belongs(Estado_cuenta::class);
    }
    public function tipo_billetes(){
        return $this->hasMany(Tipo_billete::class);
    }
}
