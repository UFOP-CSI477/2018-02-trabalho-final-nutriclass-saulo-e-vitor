@extends('layouts.app')

@section('content')

<div class="jumbotron">
  <h1>Alunos</h1>
</div>
<form class="" action="{{route('aluno.buscar')}}" method="post">
  @csrf
    <label for="nome">Buscar por Aluno:</label>
    <div class="input-group">
      <input type="text" class="form-control" required id="nome" name="nome">
      <div>&nbsp;</div>  <div class="input-group-btn">
        <input type="submit" name="btnSalvar" class="btn btn-primary" value="Buscar">
      </div>
    </div>
</form>

<div class="table-overflow">

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
      <td><a href="{{route('alunos.show', $r->id )}}">{{ $r->id}}</a> </td>
      <td><a href="{{route('alunos.show', $r->id )}}">{{ $r->nome }}</a> </td>
      <td>{{ $r->matricula }} </td>
      <td>{{ date( 'd/m/Y' , strtotime($r->data_nascimento)) }}</td>


    </tr>
    @endforeach
    </tbody>
    </table>
  </div>

 <a href="/home" class="btn btn-secondary">Voltar</a>
 <div>&nbsp;</div>
@endsection
