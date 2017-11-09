<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEntregasTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('entregas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('string', 10);
            $table->string('string', 50);
            $table->string('string', 50);
            $table->integer('entregador_id')->unsigned();
            $table->foreign('entregador_id')->references('id')->on('entregadors')->onDelete('cascade');
            $table->integer('pedido_id')->unsigned();
            $table->foreign('pedido_id')->references('id')->on('pedidos')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('entregas');
    }

}
