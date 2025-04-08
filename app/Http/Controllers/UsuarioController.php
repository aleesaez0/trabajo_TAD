<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Usuario;
use App\Models\Persona;
use App\Models\Libro;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $usuarios = Usuario::all();
        return view('usuarios.index', compact('usuarios'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $personas = Persona::all();
        return view('usuarios.create', compact('personas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Usuario::create($request->all());
        return redirect()->route('usuarios.index');
    }

    public function show(string $id)
    {
        $usuario = Usuario::findOrFail($id);
        return view('usuarios.show', compact('usuario'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $usuario = Usuario::findOrFail($id);
        return view('usuarios.edit', compact('usuario'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $usuario = Usuario::findOrFail($id);
        $usuario->update($request->all());
        return redirect()->route('usuarios.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $usuario = Usuario::findOrFail($id);
        $usuario->delete();
        return redirect()->route('usuarios.index');
    }

    public function tomarPrestado(Request $request, Usuario $usuario)
    {
        $request->validate([
            'fk_libro' => 'required|exists:libros,id'
        ]);

        $libro = Libro::find($request->fk_libro);
        $libro->update([
            'prestado' => true,
            'fk_usuario' => $usuario->id
        ]);

        return back()->with('success', 'Libro tomado en préstamo');
    }

    public function devolverLibro(Request $request)
    {
        $request->validate([
            'fk_libro' => 'required|exists:libros,id'
        ]);

        $libro = Libro::find($request->fk_libro);
        $libro->update([
            'prestado' => false,
            'fk_usuario' => null
        ]);

        return back()->with('success', 'Libro devuelto');
    }
}
