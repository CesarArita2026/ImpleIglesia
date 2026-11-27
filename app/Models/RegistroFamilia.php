<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RegistroFamilia extends Model
{
    protected $fillable=[
        'asistente_id',
        'fecha_registro',
        'apellido'
    ];
    public function asistente(){
        return $this->belongs(Asistente::class);
    }
    public function aportes(){
        return $this->hasMany(Aporte::class);
    }
}
