@extends('layouts.app')

@section('content')

 <div class="jumbotron">
   <h1>Inserir/Excluir Alunos: {{$turma->nome}}</h1>
 </div>
  <form class="" action="/turma_alunos" method="post">
    @csrf
    <div class="form-row">
      <div class="form-group col-md-2">
        <label for="turma_id">Código:</label>
        <input type="text" class="form-control" id="turma_id" name="turma_id" value="{{$turma->id}}" readonly>
      </div>
      <div class="form-group col-md-10">
        <label for="nome">Nome:</label>
        <input type="text" class="form-control" id="nome" name="nome" value="{{$turma->nome}}" readonly>
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-md-4">
        <label for="escolaridade">Escolaridade:</label>
        <input type="text" class="form-control" id="escolaridade" name="escolaridade" value="{{$turma->escolaridade}}" disabled>
      </div>
      <div class="form-group col-md-4">
        <label for="ano">Ano:</label>
        <input type="text" class="form-control" id="ano" name="ano" value="{{$turma->ano}}" disabled>
      </div>
      <div class="form-group col-md-4">
        <label for="turno">Turno:</label>
        <select name="turno" id="turno" onchange="" class="form-control form-control" disabled>
 				<option value="0" selected="selected">Selecione</option>
        <option value="1"
          @if($turma->turno == 1)
            selected
          @endif>Manhã</option>
 				<option value="2"
        @if($turma->turno == 2)
          selected
        @endif>Tarde</option>
 				<option value="3"
        @if($turma->turno == 3)
          selected
        @endif>Noite</option>
         <option value="4"
         @if($turma->turno == 4)
           selected
         @endif>Integral</option>
 			</select>
      </div>
    </div>
    <div class="form-row">
       <div class="form-group col-md-4">
         <label for="Sala">Sala:</label>
         <input type="text" class="form-control" id="sala" name="sala" value="{{$turma->sala}}" disabled>
       </div>
       <div class="form-group col-md-8">
         <label for="Professor">Professor Responsável:</label>
         <input type="text" class="form-control" id="professor" name="professor" value="{{$turma->professor}}" disabled>
       </div>
    </div>
    <div class="form-group">
      <label for="aluno_id">Selecione um aluno:</label>
      <select class="form-control form-control" name="aluno_id">
          @foreach($alunos as $a)
            <option value="{{$a->id}}">{{$a->nome}}</option>
          @endforeach
      </select>
    </div>
    <div class="form-group">&nbsp;</div>
    <input type="submit" name="btnSalvar" class="btn btn-primary" value="Inserir Aluno">
    <div class="form-group">&nbsp;</div>

    <table class="table table-striped">
        <thead>
          <tr>
            <th>Código</th>
            <th>Matrícula</th>
            <th>Nome</th>
            <th>Data de Nascimento</th>
            <th>Excluir Aluno da Turma</th>


          </tr>
        </thead>
      <tbody>
      @foreach ($alunosturma as $r)

      <tr>
        <td>{{ $r->id}} </td>
        <td>{{ $r->matricula }} </td>
        <td>{{ $r->nome}} </td>
        <td>{{ date( 'd/m/Y' , strtotime($r->data_nascimento)) }}</td>
        <td><a href="{{route('turma_aluno.delete', [$turma->id,$r->id])}}" class="btn btn-danger">Excluir</a></td>
      </tr>
      @endforeach
      </tbody>
      </table>
  </form>
  <div class="form-group">&nbsp;</div>
  <a href="/turma_alunos" class="btn btn-secondary">Voltar</a>
  <div class="form-group">&nbsp;</div>
@endsection
