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
       <h2>Editar Medicamento</h2>
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
   
<form action="{{ route('medicamentos.update', $medicamento->id)}}" method="POST">
    @csrf
    @method('PUT')
  
    <div class="row">
        <div class="">
            <div class="form-group">
                <strong>Nombre:</strong>
                <input type="text" name="name" value="{{$medicamento->nombre}}" class="form-control" placeholder="Droga">
            </div>
        </div>
        <div class="">
            <div class="form-group">
                <strong>Monodroga:</strong>
                <input type="text" name="monodrug" value="{{$medicamento->monodroga}}" class="form-control" placeholder="Droga">
            </div>
        </div>
        <div class="">
            <div class="form-group">
                <strong>Presentacion:</strong>
                <input type="text" name="presentation" value="{{$medicamento->presentacion}}" class="form-control" placeholder="Tabletas">
            </div>
        </div>
        <div class="">
            <div class="form-group">
                <strong>Precio:</strong>
                <input type="number" name="price" value="{{$medicamento->precio}}" class="form-control" placeholder="54534">
            </div>
        </div>
    
        <div class="">
            <div class="form-group">
                <strong>Accion Terapeutica:</strong>
                <input type="text" name="action" value="{{$medicamento->accion_t}}" class="form-control" placeholder="54534">
            </div>
        </div>

        <div class="">
            <div class="form-group">
                <strong>Stock:</strong>
                <input type="number" name="stock" value="{{$medicamento->stock}}" class="form-control" placeholder="123">
            </div>
        </div>

        <div class="">
            <div class="form-group">
                <strong>Farmacia:</strong>
                <select name="pharmacy">
                  @foreach ($farmacias as $farmacia)
                    @if($farmacia->id == $medicamento->farmacia_id) 
                        <option selected='selected' value="{{$farmacia->id}}">{{$farmacia->nombre}}</option>
                    @else
                        <option value="{{$farmacia->id}}">{{$farmacia->nombre}}</option>
                    @endif
                  @endforeach
                </select>
            </div>
        </div>

        <div class="">
            <div class="form-group">
                <strong>Laboratorio:</strong>
                <select name="laboratory">
                  @foreach ($laboratorios as $laboratorio)
                    @if($laboratorio->id == $medicamento->laboratorio_id) 
                        <option selected='selected' value="{{$laboratorio->id}}">{{$laboratorio->nombre}}</option>
                    @else
                        <option value="{{$laboratorio->id}}">{{$laboratorio->nombre}}</option>
                    @endif
                  @endforeach
                </select>
            </div>
        </div>

        <div class="">
                  <button type="submit" class="btn btn-primary">Submit</button>
          </div>
</form>
    </body>
</html>
