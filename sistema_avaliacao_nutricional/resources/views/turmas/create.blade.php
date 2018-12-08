@extends('layout')

@section('conteudo')

<h1>Inserir Turmas</h1>
   <form class="" action="/turmas" method="post">
     @csrf
     <p>Nome: <input type="text" name="nome"></p>
     <p>Escolaridade: <input type="text" name="escolaridade"></p>
     <p>Ano: <input type="text" name="ano"></p>
     <p>Turno: <input type="text" name="turno"></p>
     <p>Sala: <input type="text" name="sala"></p>
     <p>Professor: <input type="text" name="professor"></p>
     <div>&nbsp;</div>
     <input type="submit" name="btnSalvar" value="Incluir">
     <div>&nbsp;</div>
     <a href="#" class="badge badge-primary">Voltar</a>
     <div>&nbsp;</div>
   </form>
@endsection
