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
      <h2>Empleados</h2>
        <a href="{{route('empleados.create')}}">
          <button>AGREGAR EMPLEADO</button> 
        </a>
        <br><br>
      @foreach ($empleados as $empleado)
        {{$empleado}}
        <br>
        
        <a href="{{route('empleados.show', ['id' => $empleado->id])}}">
          <button>VER DETALLE</button> 
        </a>
        <a href="{{route('empleados.edit', ['id' => $empleado->id])}}">
          <button>EDITAR</button> 
        </a>
        
        <form action="{{ route('empleados.destroy', ['id' => $empleado->id]) }}" method="POST">
          @csrf
          @method('DELETE')
          <button type="submit">BORRAR</button> 
        </form>
        <br><br>
      @endforeach

    </body>
</html>
