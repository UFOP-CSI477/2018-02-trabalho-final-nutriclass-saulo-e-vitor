@extends('layouts.app')

@section('content')

<div class="jumbotron">
  <h1>Nova Turma</h1>
</div>
 <form class="" action="/turmas" method="post">
   @csrf
   <div class="form-group">
     <label for="nome">Nome:</label>
     <input type="text" class="form-control" required id="nome" name="nome">
   </div>
   <div class="form-row">
     <div class="form-group col-md-4">
       <label for="escolaridade">Escolaridade:</label>
       <input type="text" class="form-control" required id="escolaridade" name="escolaridade">
     </div>
     <div class="form-group col-md-4">
       <label for="ano">Ano:</label>
       <input type="number" class="form-control" required id="ano" name="ano">
     </div>
     <div class="form-group col-md-4">
       <label for="turno">Turno:</label>
       <select name="turno" id="turno" onchange="" class="form-control form-control">
				<option value="0" selected="selected">Selecione</option>
				<option value="1">Manhã</option>
				<option value="2">Tarde</option>
				<option value="3">Noite</option>
        <option value="4">Integral</option>
			</select>
     </div>
   </div>
   <div class="form-row">
      <div class="form-group col-md-4">
        <label for="Sala">Sala:</label>
        <input type="text" class="form-control" required id="sala" name="sala">
      </div>
      <div class="form-group col-md-8">
        <label for="Professor">Professor Responsável:</label>
        <input type="text" class="form-control" required id="professor" name="professor">
      </div>
   </div>

   <input type="submit" name="btnSalvar" class="btn btn-primary" value="Salvar">
   <a href="/turmas" class="btn btn-secondary">Voltar</a>
   <div>&nbsp;</div>
 </form>
@endsection
