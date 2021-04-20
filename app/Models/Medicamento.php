<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medicamento extends Model
{
    use HasFactory;

    public function farmacias() {
      return $this->belongsToMany(Farmacia::Class);
    }

    public function laboratorios() {
      return $this->belongsToMany(Laboratorio::Class);
    }
}
