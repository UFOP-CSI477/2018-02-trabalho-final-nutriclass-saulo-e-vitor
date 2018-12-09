@extends('layouts.app')

@section('content')

<div class="jumbotron">
  <h1>Alunos</h1>
</div>

<table class="table table-striped">
    <thead>
      <tr>
        <th>Código</th>
        <th>Nome</th>
        <th>Matrícula</th>
        <th>Data Nascimento</th>
      </tr>
    </thead>
  <tbody>
  @foreach ($alunos as $r)

  <tr>
    <td><a href="{{route('avaliacao.show_avaliacao', $r->id )}}">{{ $r->id}}</a> </td>
    <td><a href="{{route('avaliacao.show_avaliacao', $r->id )}}">{{ $r->nome }}</a> </td>
    <td>{{ $r->matricula }} </td>
    <td>{{ date( 'd/m/Y' , strtotime($r->data_nascimento)) }}</td>


  </tr>
  @endforeach
  </tbody>
  </table>

 <a href="#" class="btn btn-secondary">Voltar</a>
 <div>&nbsp;</div>
@endsection
