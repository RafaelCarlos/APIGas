<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePagamentoCartaosTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('pagamento_cartaos', function (Blueprint $table) {

            $table->integer('pagamento_id')->unsigned();
            $table->foreign('pagamento_id')->references('id')->on('pagamentos')->onDelete('cascade');
            $table->integer('cartao_id')->unsigned();
            $table->foreign('cartao_id')->references('id')->on('cartaos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('pagamento_cartaos');
    }

}
