@extends('partials.layout')


@section('title', 'Contact')

@section('content')
    <h1>@lang('Contact')</h1>

    
    <div class="container-sm mt-3 p-3" style="max-width: 600px;">
        <form method="" action="" class="p-3 bg-warning-subtle rounded" >
            @csrf
            <div>
                <h2 class="text-center" style="font-family: Lato, sans-serif; font-weight:550">Contacto</h2>
            </div>
            
            <input type="text" name="name" placeholder="Ingrese su nombre" value="{{old('name')}}" class="form-control form-control-sm"> <br>
            
            <input type="email" name="email" placeholder="Ingrese su email"  value="{{old('email')}}" class="form-control form-control-sm"> <br>
            
            <input type="text" name="subject" placeholder="Ingrese su asunto"  value="{{old('subject')}}" class="form-control form-control-sm"> <br>
            
            <textarea name="content" placeholder="Ingrese el mensaje"class="form-control form-control-sm">{{ old('content')}}</textarea><br>
            
            <button type="submit" class="btn btn-success">Enviar</button>
        </form>
    </div>
    

@endsection




