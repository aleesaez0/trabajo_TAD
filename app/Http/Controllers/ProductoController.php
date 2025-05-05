<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Categoria;

class ProductoController extends Controller
{
    public function index(Request $request)
    {
        $productos = Producto::with('categorias');
        $categorias = Categoria::all();

        // Si es administrador, mostrar gestión completa
        if (auth()->user()->administrador) {
            return view('productos.index', [
                'productos' => $productos->get(),
                'categorias' => $categorias
            ]);
        }

        if ($request->filled('categoria')) {
            $productos->whereHas('categorias', function ($query) use ($request) {
                $query->where('categorias.id', $request->categoria); 
            });
        }

        return view('productos.catalogo', [
            'productos' => $productos->get(),
            'categorias' => $categorias
        ]);
    }

    public function create()
    {
        $categorias = Categoria::all();
        return view('productos.create', compact('categorias'));
    }

    public function store(Request $request)
    {
        $producto = Producto::create($request->except('categorias'));
        $producto->categorias()->sync($request->input('categorias', []));

        return redirect()->route('productos.index')->with('success', 'Producto creado');
    }

    public function edit(Producto $producto)
    {
        $categorias = Categoria::all();
        return view('productos.edit', compact('producto', 'categorias'));
    }

    public function update(Request $request, Producto $producto)
    {
        $producto->update($request->except('categorias'));
        $producto->categorias()->sync($request->input('categorias', []));

        return redirect()->route('productos.index')->with('success', 'Producto actualizado');
    }

    public function destroy(Producto $producto)
    {
        $producto->delete();
        return redirect()->route('productos.index')->with('success', 'Producto eliminado');
    }
}
