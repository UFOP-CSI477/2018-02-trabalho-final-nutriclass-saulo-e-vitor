<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEvaluationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evaluations', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedinteger('aluno_id');
            $table->unsignedinteger('turma_id');
            $table->double('peso', 7, 4);
            $table->double('altura', 3, 2);
            $table->char('observacao', 250)->nullable();
            $table->unsignedinteger('doenca');
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
        Schema::dropIfExists('evaluations');
    }
}
