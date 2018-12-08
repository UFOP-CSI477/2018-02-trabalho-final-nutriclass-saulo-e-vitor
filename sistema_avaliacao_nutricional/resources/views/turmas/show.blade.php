@extends('layout')

@section('conteudo')

 <h1>Turma: {{$turma->nome}}</h1>

 <p>Nome: {{$turma->nome}}</p>
 <p>Escolaridade: {{$turma->escolaridade}}</p>
 <p>Ano: {{$turma->ano}}</p>
 <p>Turno: {{$turma->turno}}</p>
 <p>Sala: {{$turma->sala}}</p>
 <p>Professor: {{$turma->professor}}</p>

 <a href="{{route('turmas.index')}}" class="badge badge-primary" class="badge badge-success">Voltar</a>
 <a href="#" class="badge badge-success">Editar</a>
 <div>&nbsp;</div>

 <form class="" action="">
   @csrf
   @method('DELETE')
   <input type="submit" value="Excluir">
 </form>
@endsection
