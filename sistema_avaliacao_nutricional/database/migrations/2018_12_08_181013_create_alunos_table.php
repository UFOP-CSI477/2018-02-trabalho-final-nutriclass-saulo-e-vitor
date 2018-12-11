<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlunosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alunos', function (Blueprint $table) {
            $table->increments('id');
            $table->char('matricula',20);
            $table->char('nome',150);
            $table->date('data_nascimento');
            $table->unsignedinteger('sexo');
            $table->char('certidao',15);
            $table->char('telefone',15);
            $table->char('nome_mae',150);
            $table->char('nome_pai',150);
            $table->char('endereco',200);
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
        Schema::dropIfExists('alunos');
    }
}
