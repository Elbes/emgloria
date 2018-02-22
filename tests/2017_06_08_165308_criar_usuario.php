<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarUsuario extends Migration {
 
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
            $table->string('email', 255)->unique();
            $table->string('matricula', 30)->unique();
            $table->string('senha', 60);
            $table->string('nome', 255);
            $table->enum('tipo', array('ctinf', 'ascon'));
            $table->string('status', 15);
            $table->rememberToken();
            $table->timestamps();
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
