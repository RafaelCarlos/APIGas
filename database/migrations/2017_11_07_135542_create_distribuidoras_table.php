<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDistribuidorasTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('distribuidoras', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome_fantasia', 50);
            $table->string('razao_social', 50);
            $table->boolean('status_aberto');
            $table->timestamp("horario_aberto");
            $table->timestamp('horario_fechado');
            $table->string('cnpj', 20);
            $table->string('inscricao_estadual', 15);
            $table->integer('endereco_id')->unsigned();
            $table->foreign('endereco_id')->references('id')->on('enderecos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('distribuidoras');
    }

}
