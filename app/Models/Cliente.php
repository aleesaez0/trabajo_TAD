<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $fillable = ['telefono', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function carros()
    {
        return $this->hasMany(Carro::class);
    }

}
