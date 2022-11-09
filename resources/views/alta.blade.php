@extends('layout')
@section('contenidoPrin')

  <form method="POST" action="{{ route('producto.store')}}">
                @csrf
    <h4>AÑADIR UN PRODUCTO</h4>
    <section class="row">
        <section class="col-md-12">
                <div class="form-group">
                    <label for="exampleInputName">Nombre del producto</label>
                    <input type="text" class="form-control" id="exampleInputName" aria-describedby="nameHelp"
                        name="nombre" placeholder="Nombre del producto">
                </div>
            </section>
    </section>

    <section class="row">
                <div class="form-group col-6">
                    <label for="exampleInputEmail1">Precio Unitario</label>
                    <input type="number" class="form-control" id="exampleInputPrecio" name="precio" placeholder="Precio Unitario">
                </div>

                <div class="form-group col-6">
                    <label for="exampleInputEmail1">Cantidad</label>
                    <input type="number" class="form-control" id="exampleInputNumber2" name="cantidad" placeholder="Cantidad">
                </div>
    </section>

    <section>
                <div class="form-group col-12">
                    <label for="exampleFormControlTextarea1">Detalle</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="detalle"></textarea>
                </div>
    </section>
                <button type="submit" class="btn btn-success">Guardar</button>
                <a href="" class="btn btn-danger">Cancelar</a>

    </section>
</form>
@endsection
