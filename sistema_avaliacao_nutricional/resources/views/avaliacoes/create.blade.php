@extends('layouts.app')

@section('content')

<div class="jumbotron">
  <h1>Inserir Alunos na Turma: {{$turma->nome}}</h1>
</div>
 <form class="" action="{{route('turma_alunos.store',$turma->id)}}" method="post">
   @csrf

   <div class="form-group">
     <label for="nome">Selecione uma turma:</label>
     <input type="text" class="form-control" id="turma_id" name="turma_id">

   </div>
   <div class="form-group">
     <label for="nome">Selecione um aluno:</label>
     <select class="" name="aluno_id">
         @foreach($alunos as $a)
           <option value="{{$a->id}}">{{$a->nome}}</option>
         @endforeach
     </select>
   </div>

   <input type="submit" name="btnSalvar" class="btn btn-primary" value="Salvar">
   <div>&nbsp;</div>
   <a href="/home" class="btn btn-secondary">Voltar</a>
   <div>&nbsp;</div>
 </form>
@endsection
