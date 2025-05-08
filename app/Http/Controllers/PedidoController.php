<?php

namespace App\Http\Controllers;

use App\Models\Pedido;
use App\Models\Carro;
use Illuminate\Http\Request;

class PedidoController extends Controller
{
    public function index()
    {
        $cliente = auth()->user()->cliente;

        $pedidos = Pedido::whereHas('carro', function ($query) use ($cliente) {
            $query->where('cliente_id', $cliente->id);
        })->orderByDesc('fecha')->get();

        return view('pedidos.index', compact('pedidos'));
    }


    public function create()
    {
        $carros = Carro::all();
        return view('pedidos.create', compact('carros'));
    }

    public function store(Request $request)
    {
        Pedido::create($request->all());
        return redirect()->route('pedidos.index')->with('success', 'Pedido creado');
    }

    public function edit(Pedido $pedido)
    {
        $carros = Carro::all();
        return view('pedidos.edit', compact('pedido', 'carros'));
    }

    public function update(Request $request, Pedido $pedido)
    {
        $pedido->update($request->all());
        return redirect()->route('pedidos.index')->with('success', 'Pedido actualizado');
    }

    public function destroy(Pedido $pedido)
    {
        $pedido->delete();
        return redirect()->route('pedidos.index')->with('success', 'Pedido eliminado');
    }

    public function show(Pedido $pedido)
    {
        $cliente = auth()->user()->cliente;

        if ($pedido->carro->cliente_id !== $cliente->id) {
            abort(403, 'No tienes permiso para ver este pedido.');
        }

        $lineas = $pedido->carro->lineas()->with('producto')->get();

        return view('pedidos.show', compact('pedido', 'lineas'));
    }
}
