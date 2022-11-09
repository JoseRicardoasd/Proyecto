@extends('layout')

@section('contenidoPrin')
<h2>DETALLE DEL PRODUCTO</h2>
    <h5>Producto: {{ $producto->Nombre_producto }}</h5>
    <h5>Detalle: {{ $producto->Detalle }}</h5>
    <h5>Precio unitario: {{ $producto->Precio_unitario }}</h5>
    <h5>Cantidad: {{ $producto->Cantidad }}</h5></ul>

    <form method="get" action="/lista">
        <button type="submit">Regresar
       </form>
@endsection
