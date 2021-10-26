<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Farmaceutico extends Model
{
  protected $fillable = ['num_colegiatura', 'universidad', 'num_sanitario', 'fecha_graduacion'
  , 'num_registro', 'id_titulo'];
    use HasFactory;

    public function empleado() {
      return $this->morphOne(Empleado::class, 'empleable');
    }
}
