<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LineaCarro extends Model
{
    protected $table = 'lineas_carro';

    protected $fillable = [
        'carro_id',
        'producto_id',
        'cantidad',
        'precio_unitario',
    ];

    public function carro()
    {
        return $this->belongsTo(Carro::class);
    }

    public function producto()
    {
        return $this->belongsTo(Producto::class);
    }
    
}
