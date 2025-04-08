<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Biblioteca extends Model
{
    protected $fillable = ['nombre'];

    public function catalogo()
    {
        return $this->hasMany(Libro::class, 'fk_biblioteca');
    }
}
