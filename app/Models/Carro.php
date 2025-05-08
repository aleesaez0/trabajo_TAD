<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Carro extends Model
{
    protected $fillable = ['cliente_id'];

    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }

    public function lineas()
    {
        return $this->hasMany(LineaCarro::class);
    }

    public function pedido()
    {
        return $this->hasOne(Pedido::class);
    }

}
