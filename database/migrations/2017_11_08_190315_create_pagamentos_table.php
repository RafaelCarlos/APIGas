<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePagamentosTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('pagamentos', function (Blueprint $table) {
            $table->increments('id');
            $table->decimal('valor', 5, 2);
            $table->timestamp('data_pagamento');
            $table->string('tipo_pagamento', 20);
            $table->integer('entrega_id')->unsigned();
            $table->foreign('entrega_id')->references('id')->on('entregas')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('pagamentos');
    }

}
