<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
    use HasFactory;

    public function Orden_Compra() {
      return $this->belongsTo(Orden_Compra::Class);
    }
}
