<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AzucarVino extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('azucarvinos', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->string('nombre');
          $table->string('azucarresidual');//secos, abocados, semisecos, semidulces, dulces y dulces naturales.
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
          Schema::dropIfExists('azucarvinos');
    }
}
