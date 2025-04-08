<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bibliotecario extends Model
{
    protected $fillable = ['fk_persona', 'fk_biblioteca'];

    public function biblioteca()
    {
        return $this->belongsTo(Biblioteca::class, 'fk_biblioteca');
    }

    public function persona()
    {
        return $this->belongsTo(Persona::class, 'fk_persona');
    }
}
