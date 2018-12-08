@extends('layout')

@section('conteudo')

 <h1>Turma: {{$aluno->nome}}</h1>

 <p>Matrícula: {{$aluno->matricula}}</p>
 <p>Nome: {{$aluno->nome}}</p>
 <p>Data de Nascimento: {{$aluno->data_nascimento}}</p>
 <p>Sexo: {{$aluno->sexo}}</p>
 <p>Certidão: {{$aluno->certidão}}</p>
 <p>Telefone: {{$aluno->telefone}}</p>
 <p>Nome da Mãe: {{$aluno->nome_mae}}</p>
 <p>Nome do Pai: {{$aluno->nome_pai}}</p>
 <p>Endereço: {{$aluno->endereco}}</p>

 <a href="{{route('alunos.index')}}" class="badge badge-primary" class="badge badge-success">Voltar</a>
 <a href="#" class="badge badge-success">Editar</a>
 <div>&nbsp;</div>

 <form class="" action="">
   @csrf
   @method('DELETE')
   <input type="submit" value="Excluir">
 </form>
@endsection
