<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnderecosTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('enderecos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('latitude', 30);
            $table->string('longitude', 30);
            $table->string('rua_alameda', 40);
            $table->string('bairro', 40);
            $table->string('numero', 5);
            $table->string('cep', 10);
            $table->string('descricao', 15);
            $table->string('place_id', 100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('enderecos');
    }

}
