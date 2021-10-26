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
       <h2>Editar Laboratorio</h2>
       @if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   
<form action="{{ route('laboratorios.update', $laboratorio->id)}}" method="POST">
    @csrf
    @method('PUT')
  
     <div class="row">
        <div class="">
            <div class="form-group">
                <strong>Nombre:</strong>
                <input type="text" name="name" value="{{$laboratorio->nombre}}"class="form-control" placeholder="Bayer">
            </div>
        </div>
        <div class="">
            <div class="form-group">
                <strong>Nro Tlf:</strong>
                <input type="number" name="phoneno" value="{{$laboratorio->nro_telefono}}" class="form-control" placeholder="0424123456">
            </div>
        </div>
        <div class="">
            <div class="form-group">
                <strong>Direccion:</strong>
                <input type="text" name="address" class="form-control" value="{{$laboratorio->direccion}}" placeholder="Ciudad Guayana,...,Edo. Bolivar">
            </div>
        </div>
       
          <div class="">
                  <button type="submit" class="btn btn-primary">Submit</button>
          </div>

    </div>
   
</form>
    </body>
</html>
