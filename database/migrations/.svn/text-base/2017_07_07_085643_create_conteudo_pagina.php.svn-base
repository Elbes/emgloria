<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConteudoPagina extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
	public function up()
    {
        Schema::create('ta_conteudo', function (Blueprint $table) {
            $table->increments('id_conteudo')->index();
            $table->text('titulo_conteudo');
            $table->text('pagina_conteudo');
            $table->integer('id_pagina')->unsigned();
            $table->foreign('id_pagina')->references('id_pagina')->on('ta_paginas');
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
        Schema::dropIfExists('ta_conteudo');
    }
}