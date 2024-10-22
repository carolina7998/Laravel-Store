@extends('partials.layout')

@section('title','Products')

@section('content')
<h1 class="text-center" style="font-family: Lato, sans-serif;">Lista De Productos</h1>

<div>
    <a class="btn btn-info my-5 ms-2" href="{{route('productos.create')}}">Crear Producto</a>

    <div class="table-responsive table-bordered">
        <table class="table table-bordered table-striped" style="max-width: 85%; margin: 0 auto;">
        
            <thead class="table-dark">
                <tr>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Imagen</th>
                    <th>Acciones</th>
                </tr>
            </thead>
    
            <tbody>
                @foreach ($productos as $producto)
                <tr>
                    <td>{{$producto->nombre}}</td>
                    <td>{{$producto->descripcion}}</td>
                    <td class="d-flex justify-content-center"><img src="{{ asset('imagen/' . $producto->imagen) }}" alt="" width="200px" height="150px">
                    </td>
                    <td>
                        <div class="d-flex justify-content-center pt-5">
                            <a class="btn btn-secondary me-2" href="{{route('edit',$producto->id)}}">Editar</a>
    
                            <form action="{{route('delete',$producto->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Borrar</button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div>
        {!! $productos->links() !!}
    </div>
</div>
@endsection