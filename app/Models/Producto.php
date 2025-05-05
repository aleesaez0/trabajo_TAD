<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $fillable = [
        'nombre',
        'descripcion',
        'precio',
        'stock',
        'imagen',
        'categoria_id',
    ];

    public function lineasCarro()
    {
        return $this->hasMany(LineaCarro::class);
    }

    public function categorias()
    {
        return $this->belongsToMany(Categoria::class);
    }
}
