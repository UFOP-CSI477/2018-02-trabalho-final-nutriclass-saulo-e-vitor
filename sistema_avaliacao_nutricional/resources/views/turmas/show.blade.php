@extends('layouts.app')

@section('content')

 <div class="jumbotron">
   <h1>Turma: {{$turma->nome}}</h1>
 </div>
 <div class="form-group">
  <form class="" action="/turmas" method="post">
    @csrf
      <div class="form-group">
      <label for="nome">Nome:</label>
      <input type="text" class="form-control" id="nome" name="nome" value="{{$turma->nome}}" disabled>
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

    <a href="{{route('turmas.edit',$turma->id)}}" class="btn btn-primary">Editar</a>
  </form>
</div>
  <div class="form-group">
    <form class="" action="{{route('turmas.destroy',$turma->id)}}" method="post" onsubmit="return confirm('Confirma exclusão da Turma: {{$turma->nome}}?');">
      @csrf
      @method('DELETE')
      <input type="submit" class="btn btn-danger" value="Excluir">
     <a href="/turmas" class="btn btn-secondary">Voltar</a>
    </form>
  </div>
@endsection
