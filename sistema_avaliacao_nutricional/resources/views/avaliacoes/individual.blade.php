@extends('layouts.app')

@section('content')

<div class="jumbotron">
  <h1>Avaliações do Aluno: {{$avaliacao[0]->nome}}</h1>
</div>
   <form class="" action="/alunos" method="post">
     @csrf
     <div class="form-row">
       <div class="form-group col-md-4">
         <label for="matricula">Matrícula:</label>
         <input type="text" class="form-control" id="matricula" name="matricula" value="{{$avaliacao[0]->matricula}}" disabled>
       </div>
       <div class="form-group col-md-8">
         <label for="nome">Nome:</label>
         <input type="text" class="form-control" id="nome" name="nome" value="{{$avaliacao[0]->nome}}" disabled>
       </div>
     </div>

     <div class="form-row">
       <div class="form-group col-md-4">
         <label for="data_nascimento">Data de Nascimento:</label>
         <input type="text" class="form-control" id="data_nascimento" name="data_nascimento" value="{{$avaliacao[0]->data_nascimento}}" disabled>
       </div>
       <div class="form-group col-md-4">
         <label for="sexo">Sexo:</label>
         <select name="sexo" id="sexo" onchange="" class="form-control form-control" disabled>
  				<option value="0" selected="selected">Selecione</option>
  				<option value="1"
          @if($avaliacao[0]->sexo == 1)
            selected
          @endif>Feminino</option>
  				<option value="2"
          @if($avaliacao[0]->sexo == 2)
            selected
          @endif>Masculino</option>
        </select>
       </div>
       <div class="form-group col-md-4">
         <label for="certidao">Número da Certidão de Nasc.:</label>
         <input type="text" class="form-control" id="certidao" name="certidao" value="{{$avaliacao[0]->certidao}}" disabled>
       </div>
     </div>
     <table class="table table-striped">
         <thead>
           <tr>
             <th>Peso</th>
             <th>Altura</th>
             <th>IMC</th>
             <th>Classificação</th>
             <th>Doença</th>
             <th>Observacao</th>
             <th>Data</th>
             <th>Excluir</th>
           </tr>
         </thead>
       <tbody>

       @foreach ($avaliacao as $r)

       <tr>
         <td>{{ $r->peso}}</td>
         <td>{{ $r->altura }}</td>

         <td>{{$r->peso / ($r->altura * $r->altura) }} </td>
         <td>@if(($r->peso / ($r->altura * $r->altura)) < 18.5) Subnutrição
             @elseif(($r->peso / ($r->altura * $r->altura)) >= 18.5 && ($r->peso / ($r->altura * $r->altura)) <= 24.9) Peso Saudável
             @elseif(($r->peso / ($r->altura * $r->altura)) >= 25.0 && ($r->peso / ($r->altura * $r->altura)) <= 29.9) Sobrepeso
             @elseif(($r->peso / ($r->altura * $r->altura)) >= 30.0 && ($r->peso / ($r->altura * $r->altura)) <= 34.9) Obesidade Grau 1
             @elseif(($r->peso / ($r->altura * $r->altura)) >= 35.0 && ($r->peso / ($r->altura * $r->altura)) <= 39.9) Obesidade Grau 2
             @elseif(($r->peso / ($r->altura * $r->altura)) > 40.0) Obesidade Grau 3
             @endif

         </td>
         <td>@if($r->doenca == 1) Nenhuma
             @elseif($r->doenca == 2) Diabetes
             @elseif($r->doenca == 3) Intolerância à Lactose
             @elseif($r->doenca == 4) Doença Celíaca
             @elseif($r->doenca == 5) Outras
             @endif
         </td>
         <td>{{ $r->observacao }}</td>
         <td>{{date( 'd/m/Y' , strtotime($r->created_at)) }}</td>
         <td><a href="{{route('avaliacao.delete', [$r->avaliacao_id,$r->id])}}" class="btn btn-danger">Excluir</a></td>
       </tr>

       @endforeach
     </tbody>
     </table>

     <a href="#" class="btn btn-secondary">Voltar</a>
   </form>
@endsection
