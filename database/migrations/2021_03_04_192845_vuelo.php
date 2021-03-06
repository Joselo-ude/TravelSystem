<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Vuelo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vue', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_ruta');
            $table->foreign('id_ruta')->references('id')->on('ruta');
            $table->date('Fecha');
            $table->string('hora_salida',30);
            $table->string('hora_llegada',30);
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
        Schema::dropIfExists('vue');
    }
}
