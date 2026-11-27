<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Asistente extends Model
{
    protected $fillable=[
        'nombre',
        'apellido',
        'telefono',
        'contraseña',
        'inventario_id',
        'lider_id'
    ];
    public function inventarios(){
        return $this->belongs(Inventario::class);
    }
    public function liders(){
        return $this->belongs(Lider::class);
    }
    public function asistencia_liders(){
        return $this->hasMany(Asistencia_lider::class);
    }
    public function registro_familias(){
        return $this->hasMany(Registro_familia::class);
    } 
}
