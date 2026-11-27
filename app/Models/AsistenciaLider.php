<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AsistenciaLider extends Model
{
    protected $fillabe=[
        'lider_id',
        'pastor_id',
        'asistente_id',
        'asistencia',
        'fecha'
    ];
    public function lider(){
        return $this->belongs(Lider::class);
    }
    public function pastor(){
        return $this->belongs(Pastor::class);
    }
    public function asistente(){
        return $this->belongs(Asistente::class);
    }
}
