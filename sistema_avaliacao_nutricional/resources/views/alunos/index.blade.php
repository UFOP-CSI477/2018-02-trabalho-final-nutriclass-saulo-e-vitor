@extends('layout')

@section('conteudo')

<h1>Alunos</h1>
 @foreach($alunos as $a)
 <p><a href="{{route('alunos.show', $a->id )}}">{{ $a->nome }}</a></p>
 @endforeach
 <a href="#" class="badge badge-primary">Voltar</a>
 <div>&nbsp;</div>
@endsection
