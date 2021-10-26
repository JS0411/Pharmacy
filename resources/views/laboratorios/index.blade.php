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
    <h2>Laboratorios</h2>
        <a href="{{route('laboratorios.create')}}">
          <button>AGREGAR LABORATORIO</button> 
        </a>
        <br><br>
      @foreach ($laboratorios as $laboratorio)
        {{$laboratorio}}
        <br>
        
        
        <a href="{{route('laboratorios.edit', ['id' => $laboratorio->id])}}">
          <button>EDITAR</button> 
        </a>
        
        <form action="{{ route('laboratorios.destroy', ['id' => $laboratorio->id]) }}" method="POST">
          @csrf
          @method('DELETE')
          <button type="submit">BORRAR</button> 
        </form>
        <br><br>
      @endforeach

    </body>
</html>
