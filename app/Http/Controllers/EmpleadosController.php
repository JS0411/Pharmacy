<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empleado;
use App\Models\EmpleadoBasico;
use App\Models\Farmaceutico;
use App\Models\Pasante;
use App\Models\Farmacia;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\DB;

class EmpleadosController extends Controller
{
    public function index() {
      $empleados = Empleado::all();
      return view('empleados.index', compact('empleados'));
    }

    public function show($id) {
      $empleado = Empleado::findOrFail($id);
      return view('empleados.show', compact('empleado'));
    }

    public function create() {
      $empleados = Empleado::all();
      $farmacias = Farmacia::all();
      return view('empleados.create', compact('empleados','farmacias'));
    }

    public function store(Request $request, Faker $faker) {
      if($request->type == 'E') {
        $empleado = Empleado::create([
          'cedula' => $request->idnum,
          'nombre' => $request->name,
          'farmacia_id' => $request->pharmacy,
          'salario' => $request->salary,
          'empleable_id' => EmpleadoBasico::create([
            'cargo' => $request->position,
          ])->id,
          'empleable_type' => '\App\Models\EmpleadoBasico', 
        ]);
      } else if ($request->type == 'F') {
        $empleado = Empleado::create([
          'cedula' => $request->idnum,
          'nombre' => $request->name,
          'farmacia_id' => $request->pharmacy,
          'salario' => $request->salary,
          'empleable_id' => Farmaceutico::create([
            'num_colegiatura' => $request->scholarship,
            'num_sanitario' => $request->sanitary,
            'universidad' => $request->university2,
            'fecha_graduacion' => $faker->dateTimeBetween($startDate='-1 years', $endDate="now"),
            'num_registro' => $request->registry,
            'id_titulo' => $request->degree,
          ])->id,
          'empleable_type' => '\App\Models\Farmaceutico', 
        ]);
      } else {
        if ($request->ofage) {
          $empleado = Empleado::create([
            'cedula' => $request->idnum,
            'nombre' => $request->name,
            'farmacia_id' => $request->pharmacy,
            'salario' => $request->salary,
            'empleable_id' => Pasante::create([
              'fecha_inicio' => $faker->dateTimeBetween($startDate='-1 years', $endDate="now"),
              'fecha_fin' => $Faker->dateTimeBetween($startDate= 'now', $endDate = '+1 years'),
              'nombre_universidad' => $request->university1,
              'especialidad' => $request->specialty,
              'menor_de_edad' => $request->ofage,
              'nro_permiso' => $request->permit,
              'activo' => 1,
            ])->id,
            'empleable_type' => '\App\Models\Pasante', 
          ]);
        } else {
          $empleado = Empleado::create([
            'cedula' => $request->idnum,
            'nombre' => $request->name,
            'farmacia_id' => $request->pharmacy,
            'salario' => $request->salary,
            'empleable_id' => Pasante::create([
              'fecha_inicio' => $faker->dateTimeBetween($startDate='-1 years', $endDate="now"),
              'fecha_fin' => $faker->dateTimeBetween($startDate= 'now', $endDate = '+1 years'),
              'nombre_universidad' => $request->university1,
              'especialidad' => $request->specialty,
              'menor_de_edad' => $request->ofage,
              'nro_permiso' => $request->permit,
              'activo' => 1,
            ])->id,
            'empleable_type' => '\App\Models\Pasante', 
          ]);
        }
      }
      $empleados = Empleado::all();
      return view('empleados.index', compact('empleados'));
    }

    public function edit($id) {
      $empleado = Empleado::findOrFail($id);
      $farmacias = Farmacia::all();
      return view('empleados.edit', compact('empleado', 'farmacias'));
    }

    public function update(Request $request, $id) {
      $empleado = Empleado::findOrFail($id);
      $empleado->cedula = $request->idnum;
      $empleado->nombre = $request->name;
      $empleado->farmacia_id = $request->pharmacy;
      $empleado->salario = $request->salary;
      if($empleado->type == 'E') {
         $empleado->empleable->cargo = $request->position;
      } else if ($request->type == 'F') {
          $empleado->empleable->num_colegiatura = $request->scholarship;
          $empleado->empleable->num_sanitario = $request->sanitary;
          $empleado->empleable->universidad = $request->university2;
          $empleado->empleable->num_registro = $request->registry;
          $empleado->empleable->id_titulo = $request->degree;
      } else {
          $empleado->empleable->nombre_universidad = $request->university1;
          $empleado->empleable->especialidad = $request->specialty;
          $empleado->empleable->nro_permiso = $request->permit;
        };
      $empleado->save();
      $empleados = Empleado::all();
      return view('empleados.index', compact('empleados'));
    }

    public function destroy($id) {
      Empleado::findOrFail($id)->delete();
      $empleados = Empleado::all();
      return redirect()->route('empleados.index', compact('empleados'));
    }
}

