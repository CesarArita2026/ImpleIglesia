<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inventario extends Model
{
    protected $fillable=[
        'fecha_entrada',
        'stock'
    ];
    public function asistentes(){
        return $this->hasMany(Asistente::class);
    }
    public function utensilios(){
        return $this->hasMany(Utensilio::class);
    }
}
