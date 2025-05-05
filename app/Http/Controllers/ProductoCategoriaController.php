<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Categoria;

class ProductoCategoriaController extends Controller
{
    public function attach(Request $request, Producto $producto)
    {
        $request->validate([
            'categoria_id' => 'required|exists:categorias,id',
        ]);

        $producto->categorias()->attach($request->categoria_id);

        return back()->with('success', 'Categoría añadida al producto.');
    }

    public function detach(Producto $producto, Categoria $categoria)
    {
        $producto->categorias()->detach($categoria->id);

        return back()->with('success', 'Categoría eliminada del producto.');
    }
}
