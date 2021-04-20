<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pasante;
use App\Models\Empleado;
use Illuminate\Support\Facades\DB;

class PasantesController extends Controller
{
    public function index (){
      $pasantes = DB::table('pasantes')
        -> join('empleados', 'pasantes.id', '=', 'empleados.empleable_id')
        -> where('activo', '=', 1)
        -> get();

      dd($pasantes);
      return view('empleados.pasantes.index', compact('pasantes'));
    }
}
