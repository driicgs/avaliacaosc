<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEspecialidadeMedicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('especialidade_medicos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('idmedico')->unsigned();
            $table->integer('idespecialidade')->unsigned();
            $table->foreign('idmedico')->references('id')->on('medicos');
            $table->foreign('idespecialidade')->references('id')->on('especialidades');
            $table->integer('ativo');
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
        Schema::dropIfExists('especialidade_medicos');
    }
}
