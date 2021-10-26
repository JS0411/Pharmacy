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
        <script>
          document.addEventListener("DOMContentLoaded", function(){
            document.getElementById('wrapperOne').style.display = 'none';
            document.getElementById('wrapperTwo').style.display = 'none';
            document.getElementById('wrapperThree').style.display = 'none';
            document.getElementById('subwrapperOne').style.display = 'none';
   
          });

          function enableToggles() {
            var dropDown = document.getElementById('dropdown').value;
            if(dropDown === "default"){
                document.getElementById('wrapperOne').style.display = 'none';
                document.getElementById('wrapperTwo').style.display = 'none';
                document.getElementById('wrapperThree').style.display = 'none';   
            } else {
                if(dropDown === "I"){
                  document.getElementById('wrapperOne').style.display = 'block'; 
                  document.getElementById('wrapperTwo').style.display = 'none';
                  document.getElementById('wrapperThree').style.display = 'none';        
                } else if(dropDown === "F"){
                  document.getElementById('wrapperOne').style.display = 'none';
                  document.getElementById('wrapperTwo').style.display = 'block';
                  document.getElementById('wrapperThree').style.display = 'none';   
                } else if(dropDown === "E"){
                  document.getElementById('wrapperOne').style.display = 'none';
                  document.getElementById('wrapperTwo').style.display = 'none';
                  document.getElementById('wrapperThree').style.display = 'block';
                }
            }
        }

        function enableSubToggle() {
          var dropDown = document.getElementById('ageDropdown');
          for (i=0; i<2; i++){    
            if(dropDown.value === "default"){ 
              document.getElementById("subwrapperOne").style.display = "none";
            } else if(dropDown.value === "0"){
              document.getElementById("subwrapperOne").style.display = "none";
            } else if(dropDown.value === "1"){
              document.getElementById("subwrapperOne").style.display = "block";
            }  
          }
        }
        
      </script>
    </head>
    <body class="antialiased">
       <h2>Crear Empleado</h2>
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
   
<form action="{{ route('empleados.store') }}" method="POST">
    @csrf
  
     <div class="row">
        <div class="">
            <div class="form-group">
                <strong>Nombre:</strong>
                <input type="text" name="name" class="form-control" placeholder="Fulanito Perez">
            </div>
        </div>
        <div class="">
            <div class="form-group">
                <strong>Cedula:</strong>
                <input type="number" name="idnum" class="form-control" placeholder="1234567">
            </div>
        </div>
        <div class="">
            <div class="form-group">
                <strong>Salario:</strong>
                <input type="number" name="salary" class="form-control" placeholder="420">
            </div>
        </div>

        <div class="">
            <div class="form-group">
                <strong>Tipo de Empleo:</strong>
                <select id="dropdown" name="type" onchange="enableToggles()">
                  <option value="default" selected="selected"> Seleccione un tipo de empleado</option>
                  <option value="I">Pasante</option>
                  <option value="F">Farmaceutico</option>
                  <option value="E">Empleado Regular</option>
                </select>
            </div>
        </div>

        <div class="">
            <div class="form-group">
                <strong>Farmacia:</strong>
                <select name="pharmacy">
                  @foreach ($farmacias as $farmacia)
                  <option value="{{$farmacia->id}}">{{$farmacia->nombre}}</option>
                  @endforeach
                </select>
            </div>
        </div>

        <div id="wrapperOne">
          <div class="">
              <div class="form-group">
                <strong>Menor de Edad:</strong>
                <select name="ofage" id='ageDropdown' onchange="enableSubToggle()">
                  <option value="0">No</option>
                  <option value="1">Si</option>
                </select>
              </div>
          </div>

          <div id="subwrapperOne" class="">
              <div class="form-group">
                <strong>Nombre de Representante:</strong>
                <input type="text" name="representative" class="form-control" placeholder="Fulanito Perez">
              </div>
          </div>

          <div class="">
            <div class="form-group">
                <strong>Universidad:</strong>
                <input type="text" name="university1" class="form-control" placeholder="UNEG">
            </div>
          </div>

          <div class="">
            <div class="form-group">
                <strong>Especialidad:</strong>
                <input type="text" name="specialty" class="form-control" placeholder="Ing. Informatica">
            </div>
          </div>

          <div class="">
            <div class="form-group">
                <strong>Nro Permiso:</strong>
                <input type="number" name="permit" class="form-control" placeholder="1234567">
            </div>
          </div>

          <div class="">
                  <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </div>

        <div id="wrapperTwo">
          <div class="">
              <div class="form-group">
                  <strong>Universidad:</strong>
                  <input type="text" name="university2" class="form-control" placeholder="Universidad">
              </div>
          </div>
          <div class="">
              <div class="form-group">
                  <strong>Num Colegiatura:</strong>
                  <input type="number" name="scholarship" class="form-control" placeholder="421321">
              </div>
          </div>
          <div class="">
              <div class="form-group">
                  <strong>Num Sanitario:</strong>
                  <input type="number" name="sanitary" class="form-control" placeholder="23212">
              </div>
          </div>
          <div class="">
              <div class="form-group">
                  <strong>Num Registro:</strong>
                  <input type="number" name="registry" class="form-control" placeholder="32323">
              </div>
          </div>
          <div class="">
              <div class="form-group">
                  <strong>Id Titulo:</strong>
                  <input type="number" name="degree" class="form-control" placeholder="12345">
              </div>
          </div>
          <div class="">
                  <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </div>

        <div id="wrapperThree">
          <div class="">
              <div class="form-group">
                  <strong>Cargo:</strong>
                  <input type="text" name="position" class="form-control" placeholder="Conserje">
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
