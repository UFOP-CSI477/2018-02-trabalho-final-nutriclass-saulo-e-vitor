@extends('layouts.app')

@section('content')

 <div class="jumbotron">
   <h1>Avaliações - Turma {{$turma->nome}}</h1>
 </div>
  <form class="" action="/avaliacoes" method="post">
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
    <div><strong>Alunos:</strong></div>
    <table class="table table-striped">
        <thead>
          <tr>
            <th>Código</th>
            <th>Matrícula</th>
            <th>Nome</th>
            <th>Data de Nascimento</th>
          </tr>
        </thead>
      <tbody>
      @foreach ($alunosturma as $r)

      <tr>
        <td>{{ $r->id}} </td>
        <td>{{ $r->matricula }} </td>
        <td>{{ $r->nome}} </td>
        <td>{{ date( 'd/m/Y' , strtotime($r->data_nascimento)) }}</td>
      </tr>
      @endforeach
      </tbody>
      </table>
    </div>
    <div class="form-row">
      <div class="form-group col-md-4">
        <label for="aluno_id">Selecione um aluno:</label>
        <select class="form-control form-control" name="aluno_id">
            @foreach ($alunosturma as $a)
              <option value="{{$a->id}}">{{$a->nome}}</option>
            @endforeach
        </select>
      </div>
      <div class="form-group col-md-2">
        <label for="peso">Peso:</label>
        <input type="text" class="form-control" id="peso" name="peso">
      </div>
      <div class="form-group col-md-2">
        <label for="altura">Altura:</label>
        <input type="text" class="form-control" id="altura" name="altura">
      </div>
      <div class="form-group col-md-2">
        <label for="imc">IMC:</label>
        <input type="text" class="form-control" id="imc" name="imc" readonly>
      </div>
      <div class="form-group col-md-2">
        <label for="classificacao">Classificação:</label>
        <input type="text" class="form-control" id="classificacao" name="classificacao" readonly>
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-md-4">
        <label for="doenca">Doença:</label>
        <select name="doenca" id="doenca" onchange="" class="form-control form-control">
 				<option value="0" selected="selected">Selecione</option>
        <option value="1">Nenhuma</option>
        <option value="2">Diabetes</option>
 				<option value="3">Intolerânica a Lactose</option>
 				<option value="4">Doença Celíaca</option>
        <option value="5">Outras</option>
 			</select>
      </div>
      <div class="form-group col-md-8">
        <label for="observacao">Observação:</label>
        <input type="text" class="form-control" id="observacao" name="observacao">
      </div>
    </div>
    <input type="submit" name="btnSalvar" class="btn btn-primary" value="Concluir Avaliação">
    <a href="/avaliacoes" class="btn btn-secondary">Voltar</a>
  </form>
  <div class="form-group">&nbsp;</div>
@endsection
