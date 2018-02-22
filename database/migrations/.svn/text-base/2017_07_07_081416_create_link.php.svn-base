<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLink extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
	public function up()
    {
        Schema::create('ta_link', function (Blueprint $table) {
            $table->increments('id_link');
            $table->string('link_nome', 150);
            $table->string('link_descricao', 200);
            $table->string('link_acesso');
            $table->integer('prioridade');
            $table->integer('id_usuario_cadastro')->unsigned();
            $table->foreign('id_usuario_cadastro')->references('id_usuario')->on('ta_usuarios');
            $table->integer('id_usuario_atualizacao')->nullable();
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
        Schema::dropIfExists('ta_link');
    }
}
	