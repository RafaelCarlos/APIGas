<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBoletoCarteirasTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('boleto_carteiras', function (Blueprint $table) {
            $table->increments('id');
            $table->decimal('valor_boleto', 5, 2);
            $table->timestamp("data_vencimento");
            $table->timestamp("data_emissao");
            $table->boolean('confirmacao_pagamento');
            $table->string('status', 10);
            $table->integer('carteira_id')->unsigned();
            $table->foreign('carteira_id')->references('id')->on('carteiras')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('boleto_carteiras');
    }

}
