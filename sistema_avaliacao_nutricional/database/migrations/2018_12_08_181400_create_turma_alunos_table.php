<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTurmaAlunosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('turma_alunos', function (Blueprint $table) {
          $table->unsignedinteger('aluno_id');
          $table->unsignedinteger('turma_id');
          $table->primary(['aluno_id', 'turma_id']);
          $table->timestamps();
          $table->foreign('aluno_id')->references('id')->on('alunos');
          $table->foreign('turma_id')->references('id')->on('turmas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('turma_alunos');
    }
}
