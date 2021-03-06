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
    <h2>Farmacias</h2>
        <a href="{{route('farmacias.create')}}">
          <button>AGREGAR FARMACIA</button> 
        </a>
        <br><br>
      @foreach ($farmacias as $farmacia)
        {{$farmacia}}
        <br>
        
        
        <a href="{{route('farmacias.edit', ['id' => $farmacia->id])}}">
          <button>EDITAR</button> 
        </a>
        
        <form action="{{ route('farmacias.destroy', ['id' => $farmacia->id]) }}" method="POST">
          @csrf
          @method('DELETE')
          <button type="submit">BORRAR</button> 
        </form>
        <br><br>
      @endforeach

    </body>
</html>
