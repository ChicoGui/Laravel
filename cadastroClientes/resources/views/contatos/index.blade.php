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

@if (count($contatos) == 0)
    <h3>Nenhum contato cadastrado<h3>
@else
    
    <h3>Ativos</h3>
    <ul class="list-group list-group-flush">
    @foreach($contatos as $contato)
        @if ($contato->BolAtivo === 1)
        
        <li class="list-group-item">   
            <h4>{{ $contato->DescContato }}</h4>
            <div>
                <a href="{{ route('contatos.show', $contato->idContato) }}" class="btn btn-info">detalhes</a>
                <a href="{{ route('contatos.edit', $contato->idContato) }}" class="btn btn-primary">Editar</a>
            </div>
        </li>
        @endif
    @endforeach
    </ul>

    <br>

    <h3>Inativos</h3>
    <ul class="list-group list-group-flush">
    @foreach($contatos as $contato)
        @if ($contato->BolAtivo === 0)
        <li class="list-group-item">   
            <h4>{{ $contato->DescContato }}</h4>
            <div>
                <a href="{{ route('contatos.show', $contato->idContato) }}" class="btn btn-info">detalhes</a>
                <a href="{{ route('contatos.edit', $contato->idContato) }}" class="btn btn-primary">Editar</a>
            </div>
        </li>
        @endif
    @endforeach
    </ul>
     <hr>

@endif
@stop