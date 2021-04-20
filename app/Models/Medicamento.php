<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medicamento extends Model
{
    use HasFactory;

    public function farmacia() {
      return $this->belongsTo(Farmacia::Class);
    }

    public function laboratorio() {
      return $this->belongsTo(Laboratorio::Class);
    }
}
