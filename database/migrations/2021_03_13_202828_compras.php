<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Compras extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('com', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_vuelo');
            $table->foreign('id_vuelo')->references('id')->on('vuelos');
            $table->unsignedBigInteger('id_cli');
            $table->foreign('id_cli')->references('cedula')->on('clientes');
            $table->date('Fecha');
            $table->unsignedBigInteger('salida');
            $table->foreign('salida')->references('hora_salida')->on('vuelos');
            $table->unsignedBigInteger('llegada');
            $table->foreign('llegada')->references('hora_llegada')->on('vuelos');
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
