<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    //
    protected $fillable = ['matricula','nome', 'data_nascimento', 'sexo', 'certidao',
                          'telefone', 'nome_mae', 'nome_pai', 'endereco'];

}
