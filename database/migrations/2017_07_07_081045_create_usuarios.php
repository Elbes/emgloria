<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
public function up()
    {
        Schema::create('ta_usuarios', function($table)
        {
            $table->increments('id_usuario');
            $table->string('email', 200);
            $table->string('matricula', 30);
            $table->string('senha', 60);
            $table->string('nome', 200);
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
        Schema::drop('ta_usuarios');
    }
}
	