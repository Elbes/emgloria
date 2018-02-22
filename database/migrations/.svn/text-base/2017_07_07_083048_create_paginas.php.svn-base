<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaginas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
	public function up()
    {
        Schema::create('ta_paginas', function (Blueprint $table) {
            $table->increments('id_pagina')->index();
            $table->string('pagina_nome', 120);
            $table->integer('id_setor')->unsigned();
            $table->foreign('id_setor')->references('id_setor')->on('ta_setor')->onDelete('cascade');
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
        Schema::dropIfExists('ta_paginas');
    }
}