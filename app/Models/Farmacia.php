<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Farmacia extends Model
{
  protected $fillable = ['nombre', 'ciudad'];
    use HasFactory;

    public function empleados() {
      return $this->hasMany(Empleado::class);
    }

    public function medicamentos(){
      return $this->hasMany(Medicamento::Class);
    }

    public function ordenCompras(){
      return $this->hasMany(Ordene::Class);
    }

    public function compras(){
      return $this->hasManyThrough(Compra::Class, Pedido::Class);
    }


}
