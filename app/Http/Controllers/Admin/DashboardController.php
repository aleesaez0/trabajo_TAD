<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $totalUsuarios = \App\Models\User::count();
        $totalPedidos = \App\Models\Pedido::count();
        $totalFacturado = \App\Models\Pedido::sum('total');
        $productosBajoStock = \App\Models\Producto::where('stock', '<', 5)->get();

        return view('admin.dashboard', compact(
            'totalUsuarios',
            'totalPedidos',
            'totalFacturado',
            'productosBajoStock'
        ));
    }

}
