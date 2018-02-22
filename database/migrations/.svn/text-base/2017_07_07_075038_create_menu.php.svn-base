<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenu extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
	public function up()
    {
        Schema::create('ta_menu', function (Blueprint $table) {
            $table->increments('id_menu')->index();
            $table->string('nome_menu');
            $table->string('descricao_menu')->nullable();
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
        Schema::dropIfExists('ta_menu');
    }
}