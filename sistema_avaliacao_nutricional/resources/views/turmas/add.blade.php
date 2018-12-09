@extends('layout')

@section('conteudo')
 <h1>Inserir Alunos - Turma</h1>
    <form class="" action="{{route('turma.save') }}" method="post">

      @csrf
      <p>Escolha a turma:</p>
      <select class="" name="turma_id">
          @foreach($turmas as $t)
            <option value="{{$t->id}}">{{$t->nome}}</option>
          @endforeach
      </select>
      <p>Selecione o aluno:</p>
      <select class="" name="aluno_id">
          @foreach($alunos as $a)
            <option value="{{$a->id}}">{{$a->nome}}</option>
          @endforeach
      </select>
      <div>&nbsp;</div>
      <input type="submit" name="btnSalvar" value="Incluir">
      <div>&nbsp;</div>
      <a href="{{route('turmas.index')}}" class="badge badge-primary">Voltar</a>
      <div>&nbsp;</div>
    </form>

@endsection
