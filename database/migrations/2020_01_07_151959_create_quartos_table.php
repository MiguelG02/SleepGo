<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuartosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quartos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('referencia')->unique();
            $table->integer('codigo');
            $table->double('preco');
            $table->string('imagem')->default('semimagem.jpeg');
            $table->bigInteger('localizacao_id')->unsigned();
            $table->bigInteger('descricao_id')->unsigned();
            $table->bigInteger('tipoqs_id')->unsigned();
            $table->bigInteger('disponibilidade_id')->unsigned();
            $table->timestamps(); 

            $table->foreign('localizacao_id')->references('id')->on('localizacaos');
            $table->foreign('descricao_id')->references('id')->on('descricaos');
            $table->foreign('tipoqs_id')->references('id')->on('tipoqs');
            $table->foreign('disponibilidade_id')->references('id')->on('disponibilidades');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('quartos');
    }
}
