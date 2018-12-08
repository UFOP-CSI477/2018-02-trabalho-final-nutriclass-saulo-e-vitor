<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evaluation extends Model
{
    //
    protected $fillable = ['aluno_id', 'turma_id', 'peso', 'altura', 'observacao', 'doenca'];

    public function aluno(){
      return $this->belongsTo('App\Aluno');
    }

    public function turma(){
      return $this->belongsTo('App\Turma');
    }
}
