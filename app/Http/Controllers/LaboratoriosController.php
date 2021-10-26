<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Laboratorio;



class LaboratoriosController extends Controller
{
    public function index(){
      $laboratorios = Laboratorio::all();
      return view('laboratorios.index', compact('laboratorios'));
    }

    public function edit($id) {
        $laboratorio = Laboratorio::find($id);
        return view('laboratorios.edit', compact('laboratorio'));
    }
  
    public function create() {
      return view('laboratorios.create');
    }

    public function store(Request $request) {
        $laboratorio = Laboratorio::create([
            'nombre' => $request->name,
            'nro_telefono' => $request->phoneno,
            'direccion' => $request->address,
        ]);
        $laboratorios = Laboratorio::all();
        return redirect()->route('laboratorios.index', compact('laboratorios'));
    }


    public function update(Request $request, $id) {
        $laboratorio = Laboratorio::find($id);
        $laboratorio->nombre = $request->name;
        $laboratorio->nro_telefono = $request->phoneno; 
        $laboratorio->direccion = $request->address;   
        $laboratorio->save();
        $laboratorios = Laboratorio::all();
        return redirect()->route('laboratorios.index', compact('laboratorios'));
    }

    public function destroy($id) {
        laboratorio::findOrFail($id)->delete();
        $laboratorios = laboratorio::all();
        return redirect()->route('laboratorios.index', compact('laboratorios'));
    }
}
