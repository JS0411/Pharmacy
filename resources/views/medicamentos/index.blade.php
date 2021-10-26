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
    <h2>Medicamentos</h2>
        <a href="{{route('medicamentos.create')}}">
          <button>AGREGAR MEDICAMENTOS</button> 
        </a>
        <br><br>
      @foreach ($medicamentos as $medicamento)
        {{$medicamento}}
        <br>
        
        
        <a href="{{route('medicamentos.edit', ['id' => $medicamento->id])}}">
          <button>EDITAR</button> 
        </a>
        
        <form action="{{ route('medicamentos.destroy', ['id' => $medicamento->id]) }}" method="POST">
          @csrf
          @method('DELETE')
          <button type="submit">BORRAR</button> 
        </form>
        <br><br>
      @endforeach

    </body>
</html>
