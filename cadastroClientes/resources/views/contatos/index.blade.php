@extends('layouts.master')

@section('content')

<h1>Contatos</h1>
<p class="lead"><a href="{{ route('contatos.create') }}" class="btn btn-primary">novo contato</a></p>
<hr>


@if(Session::has('flash_message'))
    <div class="alert alert-success">
        {{ Session::get('flash_message') }}
    </div>
@endif

<h3>Ativos</h3>
@foreach($contatos as $contato)
    @if ($contato->BolAtivo === 1)
       
    <h4>{{ $contato->DescContato }}</h4>
    <div>
        <a href="{{ route('contatos.show', $contato->idContato) }}" class="btn btn-info">detalhes</a>
        <a href="{{ route('contatos.edit', $contato->idContato) }}" class="btn btn-primary">Editar</a>
    </div>
    @endif
@endforeach

<br><hr>

<h3>Inativos</h3>
@foreach($contatos as $contato)
    @if ($contato->BolAtivo === 0)
       
    <h4>{{ $contato->DescContato }}</h4>
    <div>
        <a href="{{ route('contatos.show', $contato->idContato) }}" class="btn btn-info">detalhes</a>
        <a href="{{ route('contatos.edit', $contato->idContato) }}" class="btn btn-primary">Editar</a>
        <a href="{{ route('contatos.create') }}" class="btn btn-primary">criar contato</a>
    </div>
    @endif
@endforeach
 <hr>
@stop