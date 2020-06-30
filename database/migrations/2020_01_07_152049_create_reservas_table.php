<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('diaReservaIni');
            $table->date('diaReservaFin');
            $table->integer('precoTotal');
            $table->bigInteger('estado_id')->unsigned();
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('quarto_id')->unsigned();
            $table->timestamps();

            $table->foreign('estado_id')->references('id')->on('estados')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('quarto_id')->references('id')->on('quartos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservas');
    }
}
