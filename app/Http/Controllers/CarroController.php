<?php

namespace App\Http\Controllers;

use App\Models\Carro;
use App\Models\Cliente;
use App\Models\Producto;
use App\Models\Pedido;
use App\Models\LineaCarro;
use Illuminate\Http\Request;

class CarroController extends Controller
{
    public function index()
    {
        $carros = Carro::with('cliente')->get();
        return view('carros.index', compact('carros'));
    }

    public function create()
    {
        $clientes = Cliente::all();
        return view('carros.create', compact('clientes'));
    }

    public function store(Request $request)
    {
        Carro::create($request->all());
        return redirect()->route('carros.index')->with('success', 'Carro creado');
    }

    public function edit(Carro $carro)
    {
        $clientes = Cliente::all();
        return view('carros.edit', compact('carro', 'clientes'));
    }

    public function update(Request $request, Carro $carro)
    {
        $carro->update($request->all());
        return redirect()->route('carros.index')->with('success', 'Carro actualizado');
    }

    public function destroy(Carro $carro)
    {
        $carro->delete();
        return redirect()->route('carros.index')->with('success', 'Carro eliminado');
    }

    public function agregar(Request $request, Producto $producto)
    {
        $cliente = auth()->user()->cliente;
        $carro = Carro::firstOrCreate(['cliente_id' => $cliente->id]);

        LineaCarro::create([
            'carro_id' => $carro->id,
            'producto_id' => $producto->id,
            'cantidad' => $request->input('cantidad', 1),
            'precio_unitario' => $producto->precio,
        ]);

        return redirect()->route('carro.ver')->with('success', 'Producto añadido al carro');
    }

    public function ver()
    {
        $cliente = auth()->user()->cliente;

        $carro = Carro::with('lineas.producto')
            ->where('cliente_id', $cliente->id)
            ->first();

        return view('carros.index', compact('carro'));
    }

    public function confirmarPedido()
    {
        $cliente = auth()->user()->cliente;
        $carro = Carro::with('lineas.producto')->where('cliente_id', $cliente->id)->first();

        if (!$carro || $carro->lineas->isEmpty()) {
            return redirect()->route('carro.ver')->with('error', 'Tu carro está vacío.');
        }

        // VALIDACIÓN DE STOCK
        foreach ($carro->lineas as $linea) {
            if ($linea->producto->stock < $linea->cantidad) {
                return redirect()->route('carro.ver')->with('error', 'No hay suficiente stock para el producto: ' . $linea->producto->nombre);
            }
        }

        // RESTAR STOCK
        foreach ($carro->lineas as $linea) {
            $linea->producto->decrement('stock', $linea->cantidad);
        }

        // CALCULAR TOTAL
        $total = $carro->lineas->sum(fn($l) => $l->cantidad * $l->precio_unitario);

        // CREAR PEDIDO
        $pedido = Pedido::create([
            'carro_id' => $carro->id,
            'total' => $total,
            'estado' => 'pendiente',
            'fecha' => now(),
        ]);

        \Mail::to(auth()->user()->email)->send(new \App\Mail\PedidoConfirmado($pedido));


        // CREAR NUEVO CARRO PARA FUTURAS COMPRAS
        Carro::create(['cliente_id' => $cliente->id]);

        return redirect()->route('pedidos.index')->with('success', 'Pedido confirmado con éxito.');
    }


}
