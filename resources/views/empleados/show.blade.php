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
      <h2>Detalle del Empleado</h2>
        <br><br>
        {{$empleado}}
        <br>
        <h3>Informacion Adicional</h3>
        <br><br>
        {{$empleado->empleable}}
        @if ($empleado->empleable_type == '\\App\\Models\\Pasante' AND $empleado->empleable->menor_de_edad == 1)
          <br><br>
          {{$empleado->empleable->representante}}
        @endif
    </body>
</html>
