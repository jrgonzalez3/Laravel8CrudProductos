@extends('layouts.main')
@section('contenido')
<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            Listado de Productos
            <a href="{{route('products.create')}}" class="btn btn-success btn-sm float-right" style="float:right">Nuevo
                Producto</a>
        </div>
        <div class="card-body">
            @if (session('info'))
            <div class="alert alert-info alert-dismissible fade show" role="alert">
                <strong>Buen Trabajo!</strong> {{session('info')}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true"></span>
                </button>
            </div>
            @endif

            <table id="table" class="table table-responsive table-hover table-bordered">
                <thead>
                    <th>Producto</th>
                    <th>Precio</th>
                    <th>Creado</th>
                    <th>Acciones</th>
                </thead>
                <tbody>
                    @foreach($products as $product)
                    <tr>
                        <td>{{$product->description}}</td>
                        <td>{{$product->price}}</td>
                        <td>{{$product->created_at}}</td>
                        <td><a href="{{route('products.edit', $product->id)}}" class="btn btn-warning">Editar</a></td>
                        <td><a href="javascript: document.getElementById('delete-{{$product->id}}').submit()"
                                class="btn btn-danger">Eliminar</a></td>
                        <form id="delete-{{$product->id}}" action="{{route('products.destroy', $product->id)}}"
                            method="POST">
                            @method('delete')
                            @csrf
                        </form>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection