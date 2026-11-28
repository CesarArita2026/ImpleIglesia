<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Billete extends Model
{
    protected $fillable = [
        'nombre',
    ];

    public function tipo_billetes()
    {
        return $this->hasMany(TipoBillete::class);
    }
}
