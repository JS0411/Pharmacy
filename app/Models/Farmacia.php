<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Farmacia extends Model
{
    use HasFactory;

    public function empleados() {
      return $this->hasMany(Empleado::class);
    }

    public function medicamentos(){
      return $this->belongsToMany(Medicamento::Class);
    }

    public function orden_compras(){
      return $this->belongsToMany(Orden_Compra::Class);
    }

    public function compras(){
      return $this->hasManyThrough(Compra::Class, Orden_Compra::Class);
    }


}
