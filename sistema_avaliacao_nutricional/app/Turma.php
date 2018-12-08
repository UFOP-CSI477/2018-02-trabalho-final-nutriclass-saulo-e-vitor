<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Turma extends Model
{
    //
    protected $fillable = ['nome', 'escolaridade', 'ano', 'turno','sala','professor'];

    public function alunos(){
      return $this->hasMany('App\Aluno');
    }
}
