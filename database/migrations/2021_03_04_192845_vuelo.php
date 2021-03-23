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
            $table->string('id_ruta',80);
            $table->foreign('id_ruta')->references('origen')->on('ruta');
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
