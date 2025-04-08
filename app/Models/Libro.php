<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{

    protected $fillable = ['titulo', 'autor', 'prestado', 'fk_biblioteca', 'fk_usuario'];

    public function biblioteca()
    {
        return $this->belongsTo(Biblioteca::class, 'fk_biblioteca');
    }

    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'fk_usuario');
    }
}
