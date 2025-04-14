<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Administrador;
use App\Models\User;

class AdministradorController extends Controller
{
    public function index()
    {
        $administradores = Administrador::with('user')->get();
        return view('administradores.index', compact('administradores'));
    }

    public function create()
    {
        $usuarios = User::all();
        return view('administradores.create', compact('usuarios'));
    }

    public function store(Request $request)
    {
        Administrador::create($request->all());
        return redirect()->route('administradores.index')->with('success', 'Administrador creado');
    }

    public function edit(Administrador $administrador)
    {
        $usuarios = User::all();
        return view('administradores.edit', compact('administrador', 'usuarios'));
    }

    public function update(Request $request, Administrador $administrador)
    {
        $administrador->update($request->all());
        return redirect()->route('administradores.index')->with('success', 'Administrador actualizado');
    }

    public function destroy(Administrador $administrador)
    {
        $administrador->delete();
        return redirect()->route('administradores.index')->with('success', 'Administrador eliminado');
    }
}
