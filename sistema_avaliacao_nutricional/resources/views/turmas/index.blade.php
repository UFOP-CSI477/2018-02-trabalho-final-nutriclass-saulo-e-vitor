@extends('layout')

@section('conteudo')

<h1>Turmas</h1>
 @foreach($turmas as $t)
 <p><a href="{{route('turmas.show', $t->id )}}">{{ $t->nome }}</a></p>
 @endforeach
 <a href="#" class="badge badge-primary">Voltar</a>
 <div>&nbsp;</div>
@endsection
