<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laboratorio extends Model
{
  protected $fillable = ['nombre', 'direccion', 'nro_telefono'];
    use HasFactory;

    public function medicamentos(){
      return $this->hasMany(Medicamento::Class);
    }
}
