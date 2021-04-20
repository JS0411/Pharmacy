<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orden_Compra extends Model
{
    use HasFactory;

    public function compra() {
      return $this->hasOne(Compra::class);
    }
}
