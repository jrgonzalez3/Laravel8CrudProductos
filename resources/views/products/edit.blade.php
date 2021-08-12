@extends('layouts.main')
@section('contenido')
<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            Editar Producto ID {{$product->id}}
        </div>
        <div class="card-body">
            <form action="{{route('products.update', $product->id)}}" method="POST">
                @method('put')
                @csrf
                <div class="form-group">
                    <label for="Description">Descripcion</label>
                    <input type="text" autofocus class="form-control" value="{{$product->description}}"
                        name="description">
                </div>
                <div class="form-group">
                    <label for="precio">Precio</label>
                    <input type="number" class="form-control" value="{{$product->price}}" name="price">
                </div>
        </div>
        <div class="card-footer">

            <button type="submit" class="btn btn-info">Guardar</button>
            <a href="{{route('products.index')}}" class="btn btn-warning">Cancelar</a>
        </div>
        </form>
    </div>
</div>

@endsection