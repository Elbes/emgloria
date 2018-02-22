<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVideo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
	public function up()
    {
        Schema::create('ta_video', function (Blueprint $table) {
            $table->increments('id_video')->index();
            $table->string('video_nome', 120);
            $table->string('video_descricao');
            $table->string('video');
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
        Schema::dropIfExists('ta_video');
    }
}