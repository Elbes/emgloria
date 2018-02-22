<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSetor extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
	public function up()
	{
		Schema::create('ta_setor', function (Blueprint $table) {
			$table->increments('id_setor')->index();
			$table->string('nome_setor', 150);
			$table->string('sigla_setor');
			$table->string('descricao_setor')->nullable();
			$table->integer('id_menu')->unsigned();
			$table->foreign('id_menu')->references('id_menu')->on('ta_menu');
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
		Schema::dropIfExists('ta_setor');
	}
}	
