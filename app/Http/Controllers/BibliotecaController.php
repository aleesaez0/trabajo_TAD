<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Biblioteca;

class BibliotecaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bibliotecas = Biblioteca::all();
        return view('bibliotecas.index', compact('bibliotecas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('bibliotecas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Biblioteca::create($request->all());
        return redirect()->route('bibliotecas.index');
    }

    public function show(string $id)
    {
        $biblioteca = Biblioteca::findOrFail($id);
        return view('bibliotecas.show', compact('biblioteca'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $biblioteca = Biblioteca::findOrFail($id);
        return view('bibliotecas.edit', compact('biblioteca'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $biblioteca = Biblioteca::findOrFail($id);
        $biblioteca->update($request->all());
        return redirect()->route('bibliotecas.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $biblioteca = Biblioteca::findOrFail($id);
        $biblioteca->delete();
        return redirect()->route('bibliotecas.index');
    }
}
