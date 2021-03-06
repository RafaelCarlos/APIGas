<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarteirasTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('carteiras', function (Blueprint $table) {
            $table->increments('id');
            $table->decimal('saldo', 5, 2);
            $table->integer('usuario_id')->unsigned();
            $table->foreign('usuario_id')->references('id')->on('usuarios')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('carteiras');
    }

}
