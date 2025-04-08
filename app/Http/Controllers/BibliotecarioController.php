<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Bibliotecario;
use App\Models\Persona;
use App\Models\Biblioteca;

class BibliotecarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bibliotecarios = Bibliotecario::with('persona')->get();
        return view('bibliotecarios.index', compact('bibliotecarios'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $personas = Persona::all();
        $bibliotecas = Biblioteca::all();
        return view('bibliotecarios.create', compact('personas', 'bibliotecas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Bibliotecario::create($request->all());
        return redirect()->route('bibliotecarios.index');
    }

    public function show(string $id)
    {
        $bibliotecario = Bibliotecario::findOrFail($id);
        return view('bibliotecarios.show', compact('bibliotecario'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $bibliotecario = Bibliotecario::findOrFail($id);
        $personas = Persona::all();
        $bibliotecas = Biblioteca::all();
        return view('bibliotecarios.edit', compact('bibliotecario', 'personas', 'bibliotecas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $bibliotecario = Bibliotecario::findOrFail($id);
        $bibliotecario->update($request->all());
        return redirect()->route('bibliotecarios.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $bibliotecario = Bibliotecario::findOrFail($id);
        $bibliotecario->delete();
        return redirect()->route('bibliotecarios.index');
    }
}
