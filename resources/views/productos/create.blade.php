@extends('partials.layout')

@section('title','Crear Producto')

@section('content')
<div class="container-sm mt-3 p-3" style="max-width: 600px;">
    <form action="{{route('productos.store')}}" class="p-3 bg-success-subtle rounded" method="POST" enctype="multipart/form-data">
        @csrf
        <div>
            <h2 class="text-center" style="font-family: Lato, sans-serif; font-weight:550">Crear Producto</h2>
        </div>
        <br>
        <br>
        <label for="Nombre"  class="form-label" style="font-family: Lato, sans-serif; font-weight:550">Nombre:</label>
        <br>
        <input type="text" name="nombre" class="form-control form-control-sm" required>
        <br>
        <label for="Descripcion"  class="form-label" style="font-family: Lato, sans-serif; font-weight:550" >Descripción:</label>
        <br>
        <input type="text" name="descripcion" class="form-control form-control-sm" required>
        <br>
        <label for="Imagen"  class="form-label" style="font-family: Lato, sans-serif; font-weight:550">Selecciona una imagen</label>
        <br>
        <input name="imagen" type="file" class="form-control form-control-sm" required>
        <br>
        <button type="submit" class="btn btn-success">Guardar</button>
        <a class="btn btn-danger" href="{{route('productos.index')}}">Cancelar</a>
    </form>
</div>
@endsection