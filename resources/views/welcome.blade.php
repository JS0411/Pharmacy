<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }


        </style>
    </head>
    <body class="antialiased">
          <a href="{{route('farmacias.index')}}">
            <button>
              Ir a farmacias
            </button>
          </a>

          <a href="{{route('empleados.index')}}">
            <button>
              Ir a empleados
            </button>
          </a>

          <a href="{{route('medicamentos.index')}}">
            <button>
              Ir a medicamentos
            </button>
          </a>

          <a href="{{route('laboratorios.index')}}">
            <button>
              Ir a laboratorios
            </button>
          </a>
    </body>
</html>
