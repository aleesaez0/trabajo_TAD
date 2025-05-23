<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function cliente()
    {
        return $this->hasOne(\App\Models\Cliente::class);
    }

    public function administrador()
    {
        return $this->hasOne(\App\Models\Administrador::class);
    }

    public function favoritos()
    {
        return $this->belongsToMany(Producto::class, 'favoritos')->withTimestamps();
    }

    public function haMarcadoComoFavorito($productoId)
    {
        return $this->favoritos->contains('id', $productoId);
    }

}
