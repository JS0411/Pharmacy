<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedicamentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medicamentos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('monodroga');
            $table->string('presentacion');
            $table->integer('precio');
            $table->string('nombre_lab');
            $table->string('accion_t');
            $table->integer('stock');
            $table->foreignId('farmacia_id')
              ->constrained('farmacias')
              ->onDelete('cascade');
            $table->foreignId('laboratorio_id')
              ->constrained('laboratorios')
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
        Schema::dropIfExists('medicamentos');
    }
}
