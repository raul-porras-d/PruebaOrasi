<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Egresado extends Model
{
    const VALIDADO = 1;
    const REVISION = 2;
    const NO_APROVADO = 3;

    protected $guarded = ['id', 'validado'];
    use HasFactory;

    public function respuestas(){
        return $this->belongsToMany('App\Models\Respuesta');
    }

    public function domicilio(){
        return $this->hasOne('App\Models\Domicilio', 'domicilio_id');
    }

    public function DatosEgreso(){
        return $this->hasOne('App\Models\DatosEgreso', 'DatosEgreso_id');
    }
}
