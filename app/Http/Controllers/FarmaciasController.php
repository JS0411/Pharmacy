<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Farmacia;
use App\Models\Compra;
use App\Models\Pedido;


class FarmaciasController extends Controller
{
    public function index(Request $request){
       $cuentas = DB::table('farmacias')
        -> where('nombre', 'like', '%farma%')
        -> where('ciudad', 'like', '%alta%')
        -> join ('pedidos', 'farmacias.id', '=', 'pedidos.farmacia_id')
        -> join ('compras', 'pedidos.id', '=', 'compras.pedido_id')
        -> toSql();
        dd($cuentas);
    }
}
