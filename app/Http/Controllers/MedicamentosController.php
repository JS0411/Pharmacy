<?php

namespace App\Http\Controllers;

use App\Models\Medicamento;
use App\Models\Farmacia;
use App\Models\Laboratorio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MedicamentosController extends Controller
{
    public function index(){
        $medicamentos = Medicamento::all();
        return view('medicamentos.index', compact('medicamentos'));
      }
  
      public function edit($id) {
          $medicamento = Medicamento::find($id);
          $farmacias = Farmacia::all();
          $laboratorios = Laboratorio::all();
          return view('medicamentos.edit', compact('medicamento', 'farmacias', 'laboratorios'));
      }
    
      public function create() {
        $farmacias = Farmacia::all();
        $laboratorios = Laboratorio::all();
        return view('medicamentos.create', compact('farmacias', 'laboratorios'));
      }
  
      public function store(Request $request) {
          $medicamento = Medicamento::create([
              'nombre' => $request->name,
              'monodroga' => $request->monodrug,
              'presentacion' => $request->presentation,
              'precio' => $request->price,
              'accion_t' => $request->action,
              'stock' => $request->stock,
              'farmacia_id' => $request->pharmacy,
              'laboratorio_id' => $request->laboratory,
              'nombre_lab' => (Laboratorio::find($request->laboratory)->nombre),
          ]);
          $medicamentos = Medicamento::all();
          return redirect()->route('medicamentos.index', compact('medicamentos'));
      }
  
  
      public function update(Request $request, $id) {
          $medicamento = Medicamento::find($id);
          $medicamento->nombre = $request->name;
          $medicamento->monodroga = $request->monodrug; 
          $medicamento->presentacion = $request->presentation;
          $medicamento->precio = $request->price;   
          $medicamento->accion_t = $request->action;   
          $medicamento->stock = $request->stock;   
          $medicamento->farmacia_id = $request->pharmacy;   
          $medicamento->laboratorio_id = $request->laboratory;   
          $medicamento->nombre_lab = (Laboratorio::find($request->laboratory)->nombre);      
          $medicamento->save();
          $medicamentos = Medicamento::all();
          return redirect()->route('medicamentos.index', compact('medicamentos'));
      }
  
      public function destroy($id) {
          Medicamento::findOrFail($id)->delete();
          $medicamentos = Medicamento::all();
          return redirect()->route('medicamentos.index', compact('medicamentos'));
      }
}
