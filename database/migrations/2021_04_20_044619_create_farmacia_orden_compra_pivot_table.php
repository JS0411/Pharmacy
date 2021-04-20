<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFarmaciaOrdenCompraPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('farmacia_orden_compra_pivot', function (Blueprint $table) {
            $table->id();
            $table->foreignId('farmacia_id')
              ->onDelete('cascade');
            $table->foreignId('orden_compra_id')
              ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('farmacia_orden_compra_pivot');
    }
}
