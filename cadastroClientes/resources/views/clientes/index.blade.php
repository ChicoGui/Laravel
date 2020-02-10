@extends('layouts.master')

@section('content')

<h1>Clientes</h1>
<p class="lead"><a href="{{ route('clientes.create') }}" class="btn btn-primary">novo cliente</a></p>
<hr>

@if(Session::has('flash_message'))
    <div class="alert alert-success">
        {{ Session::get('flash_message') }}
    </div>
@endif

@if (count($clientes) == 0)
    <h3>Nenhum usuário cadastrado<h3>
@else

    <h3>Ativos</h3>
    <ul class="list-group list-group-flush">
    @foreach($clientes as $cliente)
        @if ($cliente->BolAtivo === 1)

        <li class="list-group-item">
           
            <h4>{{ $cliente->razaoSocial }}</h4>            
            <div>
                <a href="{{ route('clientes.show', $cliente->id) }}" class="btn btn-info">detalhes</a>
                <a href="{{ route('clientes.edit', $cliente->id) }}" class="btn btn-primary">Editar</a>
            </div>
        </li>
        @endif
    @endforeach
    </ul>

    <br>

    <h3>Inativos</h3>
    <ul class="list-group list-group-flush">
    @foreach($clientes as $cliente)
        @if ($cliente->BolAtivo === 0)

        <li class="list-group-item">
            <h4>{{ $cliente->razaoSocial }}</h4>
            <div>
                <a href="{{ route('clientes.show', $cliente->id) }}" class="btn btn-info">detalhes</a>
                <a href="{{ route('clientes.edit', $cliente->id) }}" class="btn btn-primary">Editar</a>
            </div>
        </li>
        
        @endif
    @endforeach
    </ul>

@endif
   

@stop

