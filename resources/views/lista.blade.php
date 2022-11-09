@extends('layout')
@section('contenidoPrin')
    <h2>Lista de productos</h2>

    <ul>
        @forelse ($productos as $producto)
        <h4>Número de producto: {{$producto->id}}</h4>
        <h4>Producto: {{$producto->Nombre_producto}}</h4>
        <h4>Precio: {{$producto->Precio_unitario}}</h4>
        <h4>Cantidad: {{$producto->Cantidad}}</h4>
            <li><a href="{{ route('producto.show', $producto->id) }}">Ver detalles>></a></li>
        @empty
        @endforelse
    </ul>

@endsection
