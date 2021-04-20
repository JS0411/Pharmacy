<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFarmaceuticosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('farmaceuticos', function (Blueprint $table) {
            $table->id();
            $table->integer('num_colegiatura');
            $table->integer('num_sanitario');
            $table->string('universidad');
            $table->date('fecha_graduacion');
            $table->integer('num_registro');
            $table->integer('id_titulo');
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
        Schema::dropIfExists('farmaceuticos');
    }
}
