@extends('layout')

@section('conteudo')

<h1>Inserir Alunos</h1>
   <form class="" action="/alunos" method="post">
     @csrf
     <p>Matrícula: <input type="text" name="matricula"></p>
     <p>Nome: <input type="text" name="nome"></p>
     <p>Data de Nascimento: <input type="text" name="data_nascimento"></p>
     <p>Sexo: <input type="text" name="sexo"></p>
     <p>Certidao: <input type="text" name="certidao"></p>
     <p>Telefone: <input type="text" name="telefone"></p>
     <p>Nome da Mãe: <input type="text" name="nome_mae"></p>
     <p>Nome do Pai: <input type="text" name="nome_pai"></p>
     <p>Endereço: <input type="text" name="endereco"></p>
     <div>&nbsp;</div>
     <input type="submit" name="btnSalvar" value="Incluir">
     <div>&nbsp;</div>
     <a href="#" class="badge badge-primary">Voltar</a>
     <div>&nbsp;</div>
   </form>
@endsection
