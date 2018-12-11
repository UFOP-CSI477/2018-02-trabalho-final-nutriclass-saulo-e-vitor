@extends('layouts.app')

@section('content')
<div class="jumbotron">
  <h1>Novo Aluno</h1>
</div>
   <form class="" action="/alunos" method="post">
     @csrf
     <div class="form-row">
       <div class="form-group col-md-4">
         <label for="matricula">Matrícula:</label>
         <input type="text" class="form-control"  id="matricula" name="matricula">
       </div>
       <div class="form-group col-md-8">
         <label for="nome">Nome:</label>
         <input type="text" class="form-control"  id="nome" name="nome">
       </div>
     </div>

     <div class="form-row">
       <div class="form-group col-md-3">
         <label for="data_nascimento">Data de Nascimento:</label>
         <input type="date" class="form-control"  id="data_nascimento" name="data_nascimento">
       </div>
       <div class="form-group col-md-3">
         <label for="sexo">Sexo:</label>
         <select name="sexo" id="sexo" onchange="" class="form-control form-control">
  				<option value="0" selected="selected">Selecione</option>
  				<option value="1">Feminino</option>
  				<option value="2">Masculino</option>
        </select>
       </div>
       <div class="form-group col-md-3">
         <label for="certidao">Número da Certidão de Nasc.:</label>
         <input type="text" class="form-control"  id="certidao" name="certidao">
       </div>
       <div class="form-group col-md-3">
         <label for="telefone">Telefone:</label>
         <input type="text" class="form-control"  id="telefone" name="telefone">
       </div>
     </div>
     <div class="form-row">
        <div class="form-group col-md-6">
          <label for="nome_mae">Nome da Mãe:</label>
          <input type="text" class="form-control" id="nome_mae" name="nome_mae">
        </div>
        <div class="form-group col-md-6">
          <label for="nome_pai">Nome do Pai:</label>
          <input type="text" class="form-control" id="nome_pai" name="nome_pai">
       </div>
     </div>
     <div class="form-group">
       <label for="endereco">Endereço Completo:</label>
       <input type="text" class="form-control"  id="endereco" name="endereco">
     </div>
     <input type="submit" name="btnSalvar" class="btn btn-primary" value="Incluir">
     <a href="/alunos" class="btn btn-secondary">Voltar</a>
   </form>
@endsection
