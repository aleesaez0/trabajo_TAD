<?php

use App\Http\Controllers\AdministradorController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\CarroController;
use App\Http\Controllers\LineaCarroController;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PedidosAdminController;
use App\Http\Controllers\Cliente\ClienteDashboardController;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestEmail;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test-email', function () {
    Mail::to("proyectotad55@gmail.com")->send(new TestEmail());
    return "Email sent";
});

Route::view('/login', 'auth.login')->name('login');
Route::view('/register', 'auth.register')->name('register');
Route::view('/dashboard', 'auth.dashboard')->middleware('auth');

Route::resource('productos', ProductoController::class)->middleware('auth');
Route::resource('clientes', ClienteController::class)->middleware('auth');
Route::resource('administradores', AdministradorController::class)->middleware('auth');
Route::resource('lineas_carro', LineaCarroController::class)->middleware('auth');
Route::resource('pedidos', PedidoController::class)->middleware('auth');

Route::post('/carro/agregar/{producto}', [CarroController::class, 'agregar'])->name('carro.agregar');
Route::get('/carro', [CarroController::class, 'ver'])->name('carro.ver');

Route::patch('/carros/linea/{lineaCarro}/cantidad', [LineaCarroController::class, 'actualizarCantidad'])->name('carros.lineas.cantidad');
Route::delete('/carros/linea/{lineaCarro}', [LineaCarroController::class, 'eliminar'])->name('carros.lineas.eliminar');

Route::post('/carro/confirmar', [CarroController::class, 'confirmarPedido'])->name('carro.confirmar');

Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/pedidos', [PedidosAdminController::class, 'index'])->name('pedidos.index');
    Route::patch('/pedidos/{pedido}/enviar', [PedidosAdminController::class, 'marcarEnviado'])->name('pedidos.enviar');
    Route::get('/pedidos/{pedido}', [PedidosAdminController::class, 'show'])->name('pedidos.show');
});

Route::get('/pedidos/{pedido}', [PedidoController::class, 'show'])->middleware('auth')->name('pedidos.show');
Route::get('/admin/pedidos/{pedido}', [PedidosAdminController::class, 'show'])->middleware('auth')->name('admin.pedidos.show');

Route::get('/cliente/dashboard', [ClienteDashboardController::class, 'index'])
    ->middleware('auth')
    ->name('cliente.dashboard');
