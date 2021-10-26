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
       <h2>Crear Farmacia</h2>
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
   
<form action="{{ route('farmacias.store') }}" method="POST">
    @csrf
  
     <div class="row">
        <div class="">
            <div class="form-group">
                <strong>Nombre:</strong>
                <input type="text" name="name" class="form-control" placeholder="Farmatodo">
            </div>
        </div>
        <div class="">
            <div class="form-group">
                <strong>Ciudad:</strong>
                <input type="text" name="city" class="form-control" placeholder="Ciudad Guayana">
            </div>
        </div>
    
          <div class="">
                  <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </div>
    </div>
   
</form>
    </body>
</html>
