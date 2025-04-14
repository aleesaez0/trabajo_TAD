<?php

namespace App\Http\Controllers;

use App\Models\LineaCarro;
use App\Models\Carro;
use App\Models\Producto;
use Illuminate\Http\Request;

class LineaCarroController extends Controller
{
    public function index()
    {
        $lineas = LineaCarro::with(['carro', 'producto'])->get();
        return view('lineas_carro.index', compact('lineas'));
    }

    public function create()
    {
        $carros = Carro::all();
        $productos = Producto::all();
        return view('lineas_carro.create', compact('carros', 'productos'));
    }

    public function store(Request $request)
    {
        LineaCarro::create($request->all());
        return redirect()->route('lineas_carro.index')->with('success', 'Línea de carro creada');
    }

    public function edit(LineaCarro $lineaCarro)
    {
        $carros = Carro::all();
        $productos = Producto::all();
        return view('lineas_carro.edit', compact('lineaCarro', 'carros', 'productos'));
    }

    public function update(Request $request, LineaCarro $lineaCarro)
    {
        $lineaCarro->update($request->all());
        return redirect()->route('lineas_carro.index')->with('success', 'Línea de carro actualizada');
    }

    public function destroy(LineaCarro $lineaCarro)
    {
        $lineaCarro->delete();
        return redirect()->route('lineas_carro.index')->with('success', 'Línea de carro eliminada');
    }

    public function actualizarCantidad(Request $request, LineaCarro $lineaCarro)
    {
        $request->validate(['cantidad' => 'required|integer|min:1']);
        $lineaCarro->update(['cantidad' => $request->cantidad]);

        return redirect()->route('carro.ver')->with('success', 'Cantidad actualizada');
    }

    public function eliminar(LineaCarro $lineaCarro)
    {
        $lineaCarro->delete();
        return redirect()->route('carro.ver')->with('success', 'Linea eliminada del carro');
    }

}
