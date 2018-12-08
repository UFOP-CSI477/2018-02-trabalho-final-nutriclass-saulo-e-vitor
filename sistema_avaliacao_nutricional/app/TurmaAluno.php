<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TurmaAluno extends Model
{
    //
    protected $fillable = ['aluno_id', 'turma_id', 'email', 'cidade_id'];

    public function aluno(){
      return $this->belongsTo('App\Aluno');
    }

    public function turma(){
      return $this->belongsTo('App\Turma');
    }
}
