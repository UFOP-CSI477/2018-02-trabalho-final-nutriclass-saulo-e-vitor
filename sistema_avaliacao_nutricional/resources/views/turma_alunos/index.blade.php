@extends('layouts.app')

@section('content')

<div class="jumbotron">
  <h1>Turmas - Inserir Alunos</h1>
</div>
<table class="table table-striped">
    <thead>
      <tr>
        <th>Código</th>
        <th>Nome</th>
        <th>Responsável</th>
        <th>Ano</th>
      </tr>
    </thead>
  <tbody>

  @foreach ($turmas as $r)

  <tr>
    <td><a href="{{route('turma_aluno.turma', $r->id)}}">{{ $r->id}}</a> </td>
    <td><a href="{{route('turma_aluno.turma', $r->id)}}">{{ $r->nome }}</a> </td>
    <td>{{ $r->professor}} </td>
    <td>{{ $r->ano}}</td>
  </tr>

  @endforeach
  </tbody>
  </table>

 <a href="#" class="btn btn-secondary">Voltar</a>
 <div>&nbsp;</div>
@endsection
