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
       <h2>Editar Empleado</h2>
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
   
<form action="{{ route('empleados.update', $empleado->id)}}" method="POST">
    @csrf
    @method('PUT')
  
     <div class="row">
        <div class="">
            <div class="form-group">
                <strong>Nombre:</strong>
                <input type="text" name="name" class="form-control" value={{$empleado->nombre}} placeholder="Fulanito Perez">
            </div>
        </div>
        <div class="">
            <div class="form-group">
                <strong>Cedula:</strong>
                <input type="number" name="idnum" class="form-control" value={{$empleado->cedula}} placeholder="1234567">
            </div>
        </div>
        <div class="">
            <div class="form-group">
                <strong>Salario:</strong>
                <input type="number" name="salary" class="form-control" value={{$empleado->salario}} placeholder="420">
            </div>
        </div>

        <div class="">
            <div class="form-group">
                <strong>Farmacia:</strong>
                <select name="pharmacy">
                  @foreach ($farmacias as $farmacia)
                    @if ($farmacia->id == $empleado->farmacia_id)
                      <option selected="selected" value="{{$farmacia->id}}">{{$farmacia->nombre}}</option>
                    @else
                      <option value="{{$farmacia->id}}">{{$farmacia->nombre}}</option>
                    @endif
                  @endforeach
                </select>
            </div>
        </div>
        
        @if($empleado->empleable_type == '\\App\\Models\\Pasante')
          <div class="">
            <div class="form-group">
                <strong>Universidad:</strong>
                <input type="text" name="university1"  value={{$empleado->empleable->nombre_universidad}} class="form-control" placeholder="UNEG">
            </div>
          </div>

          <div class="">
            <div class="form-group">
                <strong>Especialidad:</strong>
                <input type="text" name="specialty" value={{$empleado->empleable->especialidad}} class="form-control" placeholder="Ing. Informatica">
            </div>
          </div>

          <div class="">
            <div class="form-group">
                <strong>Nro Permiso:</strong>
                <input type="number" name="permit" value={{$empleado->empleable->nro_permiso}} class="form-control" placeholder="1234567">
            </div>
          </div>
        @elseif ($empleado->empleable_type == '\\App\\Models\\Farmaceutico')
        <div class="">
              <div class="form-group">
                  <strong>Universidad:</strong>
                  <input type="text" name="university2" value={{$empleado->empleable->universidad}} class="form-control" placeholder="Universidad">
              </div>
          </div>
          <div class="">
              <div class="form-group">
                  <strong>Num Colegiatura:</strong>
                  <input type="number" name="scholarship" value={{$empleado->empleable->num_colegiatura}} class="form-control" placeholder="421321">
              </div>
          </div>
          <div class="">
              <div class="form-group">
                  <strong>Num Sanitario:</strong>
                  <input type="number" name="sanitary" value={{$empleado->empleable->num_sanitario}} class="form-control" placeholder="23212">
              </div>
          </div>
          <div class="">
              <div class="form-group">
                  <strong>Num Registro:</strong>
                  <input type="number" name="registry" value={{$empleado->empleable->num_registro}} class="form-control" placeholder="32323">
              </div>
          </div>
          <div class="">
              <div class="form-group">
                  <strong>Id Titulo:</strong>
                  <input type="number" name="degree" value={{$empleado->empleable->id_titulo}} class="form-control" placeholder="12345">
              </div>
          </div>
        @else
          <div class="">
              <div class="form-group">
                  <strong>Cargo:</strong>
                  <input type="text" name="position" value={{$empleado->empleable->cargo}} class="form-control" placeholder="Conserje">
              </div>
          </div>
        @endif

          <div class="">
                  <button type="submit" class="btn btn-primary">Submit</button>
          </div>

        </div>

   
</form>
    </body>
</html>
