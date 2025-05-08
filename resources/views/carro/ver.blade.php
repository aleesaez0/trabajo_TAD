@extends('layouts.app')

@section('title', 'Carrito de la compra')

@section('content')
    <section class="cart-page pt-100 pb-100">
        <div class="container">
            <h1 class="heading-1 font-weight-700 mb-4">Tu carrito</h1>

            @if(count($carro->lineas) > 0)
                <div class="checkout-style-2">
                    <div class="checkout-table table-responsive overflow-auto">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Producto</th>
                                    <th>Cantidad</th>
                                    <th>Precio</th>
                                    <th>Total</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($carro->lineas as $linea)
                                    <tr>
                                        <td class="checkout-product">
                                            <div class="product-cart d-flex">
                                                <div class="product-thumb me-3">
                                                    <img src="{{ asset('storage/' . $linea->producto->url) }}"
                                                        alt="{{ $linea->producto->nombre }}">
                                                </div>
                                                <div class="product-content media-body">
                                                    <h5 class="title">
                                                        <a
                                                            href="{{ route('productos.show', $linea->producto->id) }}">{{ $linea->producto->nombre }}</a>
                                                    </h5>
                                                    <p>{{ $linea->producto->descripcion }}</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="checkout-quantity">
                                            <div class="product-quantity d-inline-flex">
                                                <form action="{{ route('carro.actualizar', $linea->id) }}" method="POST">
                                                    @csrf
                                                    @method('PUT')
                                                    <button type="submit" name="accion" value="restar" class="sub"><i
                                                            class="mdi mdi-minus"></i></button>
                                                    <input type="text" name="cantidad" value="{{ $linea->cantidad }}" readonly>
                                                    <button type="submit" name="accion" value="sumar" class="add"><i
                                                            class="mdi mdi-plus"></i></button>
                                                </form>
                                            </div>
                                        </td>
                                        <td class="checkout-price">
                                            <p class="price">{{ number_format($linea->producto->precio, 2) }} €</p>
                                        </td>
                                        <td class="checkout-price">
                                            <p class="price">{{ number_format($linea->cantidad * $linea->producto->precio, 2) }} €
                                            </p>
                                        </td>
                                        <td>
                                            <form action="{{ route('carro.eliminar', $linea->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button class="delete btn btn-link p-0"><i class="mdi mdi-delete"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    <div class="checkout-footer">
                        <div class="checkout-sub-total d-flex justify-content-between">
                            <p class="value">Subtotal:</p>
                            <p class="price">{{ number_format($carro->total(), 2) }} €</p>
                        </div>
                        <div class="checkout-btn text-end">
                            <a href="{{ route('checkout.index') }}" class="main-btn primary-btn">Pasar por caja</a>
                        </div>
                    </div>
                </div>
            @else
                <p class="text-center mt-5">Tu carrito está vacío.</p>
            @endif
        </div>
    </section>
@endsection