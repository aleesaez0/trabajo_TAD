<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    protected $fillable = ['nombre', 'edad'];


    public function bibliotecario()
    {
        return $this->hasOne(Bibliotecario::class, 'fk_bibliotecario', 'id');
    }

    public function usuario()
    {
        return $this->hasOne(Usuario::class, 'fk_usuario', 'id');
    }
}
