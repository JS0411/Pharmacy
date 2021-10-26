<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medicamento extends Model
{
  protected $fillable = ['nombre', 'monodroga', 'presentacion', 'precio',
'nombre_lab', 'accion_t', 'stock', 'farmacia_id', 'laboratorio_id'];

    use HasFactory;

    public function farmacia() {
      return $this->belongsTo(Farmacia::Class);
    }

    public function laboratorio() {
      return $this->belongsTo(Laboratorio::Class);
    }
}
