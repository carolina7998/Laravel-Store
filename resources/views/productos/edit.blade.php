@extends('partials.layout')

@section('title','Editar Producto')

@section('content')
<div class="container mt-3 p-3" style="max-width: 600px;">
    <form action="{{route('productos.update',$producto)}}" class="p-3 bg-success-subtle rounded" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div>
            <h2 class="text-center" style="font-family: Lato, sans-serif; font-weight:550">Editar Producto</h2>
        </div>
        <br>
        <label for="Nombre" class="form-label" style="font-family: Lato, sans-serif; font-weight:550">Nombre:</label>
        <br>
        <input type="text" name="nombre" class="form-control form-control-sm" required value="{{$producto->nombre}}">
        <br>
        <label for="Descripcion" class="form-label" style="font-family: Lato, sans-serif; font-weight:550">Descripción:</label>
        <br>
        <input type="text" name="descripcion" class="form-control form-control-sm" required value="{{$producto->descripcion}}">
        <br>
        <div class="my-2">
            <!--<label for="Imagen_Actual" class="form-label" style="font-family: Lato, sans-serif; font-weight:550">Imagen Actual:</label>-->
            <img src="{{ asset('imagen/' . $producto->imagen) }}" width="250px" height="150px">
        </div>
        <label for="Imagen" class="form-label" style="font-family: Lato, sans-serif; font-weight:550">Selecciona una nueva imagen:</label>
        <br>
        <input name="imagen" class="form-control form-control-sm" type="file">
        <br>
        <button type="submit"  class="btn btn-success">Guardar</button>
        <a class="btn btn-danger" href="{{route('productos.index')}}">Cancelar</a>
    </form>
</div>
@endsection