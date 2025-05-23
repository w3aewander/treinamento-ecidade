<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTreinamentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('treinamentos', function (Blueprint $table) {
            $table->id();
            $table->string('nome',50); // Nome do treinamento
            $table->string('descricao',100); // Descrição do treinamento
            $table->date('data_inicio')->nullable(); // Data de início do treinamento
            $table->date('data_fim')->nullable(); // Data de fim do treinamento
            $table->string('local',100); // Local do treinamento
            $table->string('instrutor',50); // Nome do instrutor
            $table->string('carga_horaria',20); // Carga horária do treinamento
            $table->timestamps(); //created_at, updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('treinamentos');
    }
}
