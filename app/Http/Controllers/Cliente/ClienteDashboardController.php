<?php

namespace App\Http\Controllers\Cliente;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClienteDashboardController extends Controller
{
    public function index()
    {
        $cliente = auth()->user()->cliente;

        $ultimoPedido = \App\Models\Pedido::whereHas('carro', function ($q) use ($cliente) {
            $q->where('cliente_id', $cliente->id);
        })->latest('fecha')->first();

        return view('cliente.dashboard', compact('ultimoPedido'));
    }
}
