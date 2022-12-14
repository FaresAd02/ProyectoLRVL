<!doctype html>
<html lang="en">
<font face=”Arial” color="white">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        @livewireStyles
    </head>
    <body class="bg-transparent">
        <main class="container">
            <figure class="child-element">
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
                <div class="container shadow bg-transparent">

                    <div class="row">

                        <div class="col-sm-12">
                            <h1>
                                <center>UNIVERSIDAD TECNOLOGICA DE HONDURAS</center>
                            </h1>
                        </div>
                        <div class="col-sm-12">
                            <a href="{{ route('estudiante.create') }}" class="btn btn-primary">Crear</a>
                            <a href="{{ route('estudiante.index') }}" class="btn btn-primary">Ver Tabla Estudiantes</a>
                        </div>
                        <div class="col-sm 12">
                            @yield('contenido')
                        </div>
                    </div>
                </div>
                @livewireScripts
            </figure>
        </main>
    </body>
</html>
</font>
