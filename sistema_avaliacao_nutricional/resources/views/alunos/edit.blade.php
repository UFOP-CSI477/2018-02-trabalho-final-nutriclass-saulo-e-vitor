@extends('layouts.app')

@section('content')

<div class="jumbotron">
  <h1>Aluno: {{$aluno->nome}}</h1>
</div>
   <form class="" action="{{route('alunos.update',$aluno->id)}}" method="post">
     @csrf
     @method('PATCH')
     <div class="form-row">
       <div class="form-group col-md-4">
         <label for="matricula">Matrícula:</label>
         <input type="text" class="form-control"  id="matricula" name="matricula" value="{{$aluno->matricula}}">
       </div>
       <div class="form-group col-md-8">
         <label for="nome">Nome:</label>
         <input type="text" class="form-control"  id="nome" name="nome" value="{{$aluno->nome}}">
       </div>
     </div>

     <div class="form-row">
       <div class="form-group col-md-3">
         <label for="data_nascimento">Data de Nascimento:</label>
         <input type="text" class="form-control"  id="data_nascimento" name="data_nascimento" value="{{date( 'd/m/Y' , strtotime($aluno->data_nascimento))}}">
       </div>
       <div class="form-group col-md-3">
         <label for="sexo">Sexo:</label>
         <select name="sexo" id="sexo" onchange="" class="form-control form-control">
  				<option value="0" selected="selected">Selecione</option>
  				<option value="1"
          @if($aluno->sexo == 1)
            selected
          @endif>Feminino</option>
  				<option value="2"
          @if($aluno->sexo == 2)
            selected
          @endif>Masculino</option>
        </select>
       </div>
       <div class="form-group col-md-3">
         <label for="certidao">Número da Certidão de Nasc.:</label>
         <input type="text" class="form-control"  id="certidao" name="certidao" value="{{$aluno->certidao}}">
       </div>
       <div class="form-group col-md-3">
         <label for="telefone">Telefone:</label>
         <input type="text" class="form-control"  id="telefone" name="telefone" value="{{$aluno->telefone}}">
       </div>
     </div>
     <div class="form-row">
        <div class="form-group col-md-6">
          <label for="nome_mae">Nome da Mãe:</label>
          <input type="text" class="form-control" id="nome_mae" name="nome_mae" value="{{$aluno->nome_mae}}">
        </div>
        <div class="form-group col-md-6">
          <label for="nome_pai">Nome do Pai:</label>
          <input type="text" class="form-control" id="nome_pai" name="nome_pai" value="{{$aluno->nome_pai}}">
       </div>
     </div>
     <div class="form-group">
       <label for="endereco">Endereço Completo:</label>
       <input type="text" class="form-control"  id="endereco" name="endereco" value="{{$aluno->endereco}}">
     </div>
     <input type="submit" name="btnSalvar" class="btn btn-primary" value="Salvar">
     <a href="/alunos/{{$aluno->id}}" class="btn btn-secondary">Voltar</a>
   </form>

@endsection
