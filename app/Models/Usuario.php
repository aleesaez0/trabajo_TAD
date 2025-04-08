<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $fillable = ['fk_persona'];

    public function persona()
    {
        return $this->belongsTo(Persona::class, 'fk_persona');
    }

    public function libros()
    {
        return $this->hasMany(Libro::class, "fk_usuario");
    }
}
