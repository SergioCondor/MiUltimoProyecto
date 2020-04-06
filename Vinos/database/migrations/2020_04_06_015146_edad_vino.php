<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EdadVino extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('edadvinos', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->string('nombre');
          $table->string('TiempoBarrica');
          $table->string('TiempoBotella');
          $table->string('TiempoTotal');
          $table->string('Crianza');
          $table->string('Reserva');
          $table->string('GranReserva');

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
        Schema::dropIfExists('edadvinos');
    }
}
