<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PedidosAdminController extends Controller
{
    public function index()
    {
        $pedidos = \App\Models\Pedido::with('carro.cliente.user')->orderByDesc('fecha')->get();
        return view('admin.pedidos.index', compact('pedidos'));
    }

    public function marcarEnviado(\App\Models\Pedido $pedido)
    {
        $pedido->update(['estado' => 'enviado']);

        \Mail::to($pedido->carro->cliente->user->email)
            ->send(new \App\Mail\PedidoEnviado($pedido));

        return back()->with('success', 'Pedido marcado como enviado.');
    }

    public function show(\App\Models\Pedido $pedido)
    {
        $lineas = $pedido->carro->lineas()->with('producto')->get();

        return view('admin.pedidos.show', compact('pedido', 'lineas'));
    }

}
