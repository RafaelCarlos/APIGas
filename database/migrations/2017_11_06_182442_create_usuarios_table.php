<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuariosTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        //Criando a tabela produto com esses atributos.
        Schema::create('usuarios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome', 50);
            $table->string('email', 50);
            $table->string('senha', 255);
            $table->string('telefone', 15);
            $table->string('id_facebook', 100);
            $table->boolean('ativo');
            $table->string('token', 255);
            $table->string('token_fcm', 255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('usuarios');
    }

}
