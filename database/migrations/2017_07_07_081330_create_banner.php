<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBanner extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
	public function up()
    {
        Schema::create('ta_banner', function (Blueprint $table) {
            $table->increments('id_banner');
            $table->string('banner_nome');
            $table->date('validade');
            $table->text('banner_obs')->nullable();
            $table->integer('prioridade');
            $table->string('imagen_banner');
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
        Schema::dropIfExists('ta_banner');
    }
}
	