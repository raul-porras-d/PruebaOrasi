<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pregunta extends Model
{
    protected $guarded = ['id'];
    const OPCIONMULTIPLE = 1;
    const PREGUNTAMULTIPLE = 2;

    use HasFactory;

    public function respuestas()
    {
        return $this->hasMany(Respuesta::class, 'pregunta_id');
    }

    public function categoria()
    {
        return $this->BelongsTo('App\Models\Categoria', 'categoria_id');
    }

    public function subpreguntas()
    {
        return $this->hasMany(Pregunta::class, 'parent_id');
    }
}
