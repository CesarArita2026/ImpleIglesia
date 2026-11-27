<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TipoBillete extends Model
{
    protected $fillable=[
        'aporte_id',
        'billete_id',
        'cantidad_billetes'
    ];
    public function aporte(){
        return $this->belongs(Aporte::class);
    }
    public function billete(){
        return $this->belongs(Billete::class);
    }
}
