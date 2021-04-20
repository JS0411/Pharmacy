<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pasante;

class PasantesController extends Controller
{
    public function index (){
      $pasantes = Pasante::all();
      return view('empleados.pasantes.index', compact('pasantes'));
    }
}
