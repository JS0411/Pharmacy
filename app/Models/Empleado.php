<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    protected $fillable = ['farmacia_id', 'cedula', 'nombre', 'empleable_id', 'empleable_type', 'salario'];

    use HasFactory;

    public function farmacia() {
      return $this->belongsTo(Farmacia::class);
    }

    public function empleable() {
      return $this->morphTo();
    }
}
