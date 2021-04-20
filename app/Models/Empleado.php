<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    use HasFactory;

    public function farmacia() {
      return $this->belongsTo(Farmacia::class);
    }

    public function farmaceutico() {
      return $this->hasOne(Farmaceutico::class);
    }

    public function empleable() {
      return $this->morphTo();
    }
}
