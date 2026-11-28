<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AsistenciaLider extends Model
{
    protected $fillable = [
        'lider_id',
        'pastor_id',
        'asistente_id',
        'asistencia',
        'fecha',
    ];

    public function lider()
    {
        return $this->belongsTo(Lider::class);
    }

    public function pastor()
    {
        return $this->belongsTo(Pastor::class);
    }

    public function asistente()
    {
        return $this->belongsTo(Asistente::class);
    }
}
