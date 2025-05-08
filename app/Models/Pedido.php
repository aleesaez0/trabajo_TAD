<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    protected $fillable = ['carro_id', 'total', 'estado', 'fecha'];

    public function carro()
    {
        return $this->belongsTo(Carro::class);
    }

    protected $casts = [
        'fecha' => 'datetime',
    ];

}
