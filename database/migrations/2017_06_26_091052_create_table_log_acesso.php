<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableLogAcesso extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
 public function up()
    {
        Schema::create('ta_log_acesso', function (Blueprint $table) {
            $table->increments('id_log')->index();
            $table->string('ip_acesso');
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
        Schema::dropIfExists('ta_log_acesso');
    }
}
