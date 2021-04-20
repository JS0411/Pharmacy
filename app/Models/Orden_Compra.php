<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orden_Compra extends Model
{
    use HasFactory;

    public function farmacia(){
      return $this->belongsTo(Farmacia::class);
    }

    public function compra() {
      return $this->hasOne(Compra::class);
    }
}
