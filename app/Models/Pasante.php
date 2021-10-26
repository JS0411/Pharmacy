<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasante extends Model
{
    protected $fillable = ['farmacia_id', 'fecha_inicio', 'fecha_fin', 'nombre_universidad'
    , 'especialidad', 'menor_de_edad', 'nro_permiso', 'activo'];
    use HasFactory;

    public function empleado() {
      return $this->morphOne(Empleado::class, 'empleable');
    }

    public function representante() {
      return $this->hasOne(Representante::class);
    }
}
