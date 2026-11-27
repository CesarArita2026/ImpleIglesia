<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EstadoCuenta extends Model
{
    protected $fillable=[
        'mes'
    ];
    public function aportes(){
        return $this->hasMany(Aporte::class);
    }
}
