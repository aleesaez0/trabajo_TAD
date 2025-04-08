<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Libro;
use App\Models\Usuario;
use App\Models\Biblioteca;

class LibroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $libros = Libro::all();
        return view('libros.index', compact('libros'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $bibliotecas = Biblioteca::all();
        return view('libros.create', compact('bibliotecas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Libro::create($request->all());
        return redirect()->route('libros.index');
    }

    public function show(string $id)
    {
        $libro = Libro::findOrFail($id);
        return view('libros.show', compact('libro'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $libro = Libro::findOrFail($id);
        return view('libros.edit', compact('libro'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $libro = Libro::findOrFail($id);
        $libro->update($request->all());
        return redirect()->route('libros.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $libro = Libro::findOrFail($id);
        $libro->delete();
        return redirect()->route('libros.index');
    }

    // Muestra el formulario para prestar un libro
    public function showPrestarForm(Libro $libro)
    {
        $usuarios = Usuario::all();
        return view('libros.prestar', compact('libro', 'usuarios'));
    }

    // Procesa el préstamo
    public function prestar(Request $request, Libro $libro)
    {
        $request->validate([
            'fk_usuario' => 'required|exists:usuarios,id'
        ]);

        $libro->update([
            'prestado' => true,
            'fk_usuario' => $request->fk_usuario
        ]);

        return redirect()->route('libros.show', $libro)
            ->with('success', 'Libro prestado correctamente');
    }

    // Procesa la devolución
    public function devolver(Libro $libro)
    {
        $libro->update([
            'prestado' => false,
            'fk_usuario' => null
        ]);

        return back()->with('success', 'Libro devuelto correctamente');
    }
}
