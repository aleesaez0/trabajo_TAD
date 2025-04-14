<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Cliente;
use App\Models\User;

class ClienteController extends Controller
{
    public function index()
    {
        $clientes = Cliente::with('user')->get();
        return view('clientes.index', compact('clientes'));
    }

    public function create()
    {
        $usuarios = User::all();
        return view('clientes.create', compact('usuarios'));
    }

    public function store(Request $request)
    {
        Cliente::create($request->all());
        return redirect()->route('clientes.index')->with('success', 'Cliente creado');
    }

    public function edit(Cliente $cliente)
    {
        $usuarios = User::all();
        return view('clientes.edit', compact('cliente', 'usuarios'));
    }

    public function update(Request $request, Cliente $cliente)
    {
        $cliente->update($request->all());
        return redirect()->route('clientes.index')->with('success', 'Cliente actualizado');
    }

    public function destroy(Cliente $cliente)
    {
        $cliente->delete();
        return redirect()->route('clientes.index')->with('success', 'Cliente eliminado');
    }
}
