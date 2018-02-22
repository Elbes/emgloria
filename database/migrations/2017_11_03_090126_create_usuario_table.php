<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
   public function up()
    {
        Schema::create('tb_usuario', function (Blueprint $table) {
            $table->increments('id_usuario')->index();
            $table->string('nome');
            $table->string('telefone');
            $table->string('email');
            $table->date('dt_nascimento');
            $table->string('login');
            $table->string('senha');
            $table->integer('id_perfil')->unsigned();
            $table->foreign('id_perfil')->references('id_perfil')->on('tb_perfil')->onDelete('cascade');
            $table->timestamp('dhs_cadastro')->nullable();
            $table->timestamp('dhs_atualizacao')->nullable();
            $table->timestamp('dhs_exclusao_logica')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_usuario');
    }
}
	