{{-- template con el cual trabajaremos --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- Css de Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    {{-- Framework para usar iconos --}}
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    {{-- Nombre para cada vista --}}
    <title> @yield('title')</title>
    {{-- migrar a css --}}
    <style type="text/css">
        ul li a{
            color: aliceblue;
            text-decoration: none;
        }
        i{
            width: 24px;
            height: 24px;
        }
        button#tam{
            width: 50px;
            height: 50px;
        }
        #color-font{
            color: #ff0000;
        }
        .uppercase{
            text-transform: uppercase;
        }
    </style>
</head>
<body>
{{-- Cuerpo estandar --}}
    <div class="container-fluid">
        <div class="row">
            {{-- Traemos el componente Sidebar --}}
            @include('components.sidebar')
            {{-- Este es el cuerpo para trabajar todas las vistas, lo que cambiara en cada una --}}
            <div class="offset-3 offset-xl-2 col-xl-10 col-9 mt-5">
                @yield('content')
            </div>
        </div>
    </div>
    {{-- Script de bootstrap, para usar el menu desplegable --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
