@extends('layouts.app')

@section('content')

 <div class="jumbotron">
   <h1>Editar Turma: {{$turma->nome}}</h1>
 </div>
  <form class="" action="{{route('turmas.update',$turma->id)}}" method="post">
    @csrf
    @method('PATCH')
    <div class="form-group">
      <label for="nome">Nome:</label>
      <input type="text" class="form-control" id="nome" required name="nome" value="{{$turma->nome}}">
    </div>
    <div class="form-row">
      <div class="form-group col-md-4">
        <label for="escolaridade">Escolaridade:</label>
        <input type="text" class="form-control" required id="escolaridade" name="escolaridade" value="{{$turma->escolaridade}}">
      </div>
      <div class="form-group col-md-4">
        <label for="ano">Ano:</label>
        <input type="number" class="form-control" required id="ano" name="ano" value="{{$turma->ano}}">
      </div>
      <div class="form-group col-md-4">
        <label for="turno">Turno:</label>
        <select name="turno" id="turno" onchange="" class="form-control form-control">
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
         <input type="text" class="form-control" required id="sala" name="sala" value="{{$turma->sala}}">
       </div>
       <div class="form-group col-md-8">
         <label for="Professor">Professor Responsável:</label>
         <input type="text" class="form-control" required id="professor" name="professor" value="{{$turma->professor}}">
       </div>
    </div>
    <input type="submit" name="btnSalvar" class="btn btn-primary" value="Salvar">
    <a href="/turmas/{{$turma->id}}" class="btn btn-secondary">Voltar</a>
  </form>
@endsection
