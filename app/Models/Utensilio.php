<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Utensilio extends Model
{
    protected $fillable = [
        'inventario_id',
        'nombre',
        'categoria',
        'descripcion',
    ];

    public function inventario()
    {
        return $this->belongsTo(Inventario::class);
    }
}
