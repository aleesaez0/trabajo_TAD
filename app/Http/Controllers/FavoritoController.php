<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Support\Facades\Auth;

class FavoritoController extends Controller
{
    public function toggle(Producto $producto)
    {
        $user = Auth::user();

        if ($user->favoritos()->where('producto_id', $producto->id)->exists()) {
            $user->favoritos()->detach($producto->id);
        } else {
            $user->favoritos()->attach($producto->id);
        }

        return back();
    }

    public function misFavoritos()
    {
        $favoritos = auth()->user()->favoritos()->get();
        return view('cliente.favoritos', compact('favoritos'));
    }

}