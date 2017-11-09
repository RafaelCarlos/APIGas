<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProdutosTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('produtos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->string('descricao');
            $table->decimal('valor_venda', 5, 2);
            $table->decimal('valor_minimo', 5, 2);
            $table->integer('distribuidora_id')->unsigned();
            $table->timestamps();
        });

        Schema::table(produtos, function ($table) {
            $table->foreign('distribuidora_id')->references('id')->on('distribuidoras')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('produtos');
    }

}
