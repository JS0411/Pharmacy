<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Farmacia;
use App\Models\Compra;
use App\Models\Pedido;


class FarmaciasController extends Controller
{
    public function index(){
      $farmacias = Farmacia::all();
      return view('farmacias.index', compact('farmacias'));
    }

    public function edit($id) {
        $farmacia = Farmacia::find($id);
        return view('farmacias.edit', compact('farmacia'));
    }
  
    public function create() {
        return view('farmacias.create');
    }

    public function store(Request $request) {
        $farmacia = Farmacia::create([
            'nombre' => $request->name,
            'ciudad' => $request->city,
        ]);
        $farmacias = Farmacia::all();
        return redirect()->route('farmacias.index', compact('farmacias'));
    }


    public function update(Request $request, $id) {
        $farmacia = Farmacia::find($id);
        $farmacia->nombre = $request->name;
        $farmacia->ciudad = $request->city;   
        $farmacia->save();
        $farmacias = Farmacia::all();
        return redirect()->route('farmacias.index', compact('farmacias'));
    }

    public function destroy($id) {
        Farmacia::findOrFail($id)->delete();
        $farmacias = Farmacia::all();
        return redirect()->route('farmacias.index', compact('farmacias'));
    }
}
