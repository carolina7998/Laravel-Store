<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('tittle')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>

<body>
    <nav class="navbar bg-dark border-bottom border-body" data-bs-theme="dark">
        <ul class="nav nav-pills">
            <li class="nav-item"><a class="nav-link" style="color:green; font-size:1.2rem" href="{{ route('home')}}">@lang('Home')</a></li>
    
            <li class="nav-item"><a class="nav-link" style="color:green;font-size:1.2rem" href="{{ route('about')}}">@lang('About')</a></li>
    
            <li class="nav-item"><a class="nav-link" style="color:green;font-size:1.2rem" href="{{ route('contact')}}">@lang('Contact')</a></li>
            
            <li class="nav-item"><a class="nav-link" style="color:green;font-size:1.2rem" href="{{ route('productos.index')}}">@lang('Products')</a></li>
    
        </ul>
    </nav>



    @yield('content')

</body>

</html>