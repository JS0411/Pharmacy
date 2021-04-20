<?php

namespace App\Http\Controllers;

use App\Models\Medicamento;
use App\Models\Farmacia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MedicamentosController extends Controller
{
    public function index(Request $request){
      $medicamentos = DB::table('medicamentos')
        -> join ('farmacias', 'medicamentos.farmacia_id', '=', 'farmacias.id')
        -> select('medicamentos.nombre AS nombre_med', 'farmacias.nombre AS nombre_farmacia', 'accion_t', 'presentacion', 'monodroga', 'precio', 'nombre_lab', 'stock', 'farmacia_id')
        -> where('accion_t', 'like', '%{$request['med_query']}%')
        -> where('farmacias.nombre', 'like', '%{$request['pharma_query']}%')
        -> get();

        dd($medicamentos);

    }
}
