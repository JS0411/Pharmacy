<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasante extends Model
{
    use HasFactory;

    public function empleado() {
      return $this->morphOne(Empleado::class, 'empleable');
    }

    public function representante() {
      return $this->hasOne(Representante::class);
    }
}
