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

<h3>Ativos</h3>
@foreach($clientes as $cliente)
    @if ($cliente->BolAtivo === 1)
       
    <h4>{{ $cliente->razaoSocial }}</h4>
    <div>
        <a href="{{ route('clientes.show', $cliente->idCliente) }}" class="btn btn-info">detalhes</a>
        <a href="{{ route('clientes.edit', $cliente->idCliente) }}" class="btn btn-primary">Editar</a>
        <a href="{{ route('contatos.create') }}" class="btn btn-primary">criar contato</a>
    </div>
    @endif
@endforeach

<br><hr>

<h3>Inativos</h3>
@foreach($clientes as $cliente)
    @if ($cliente->BolAtivo === 0)
    <h4>{{ $cliente->razaoSocial }}</h4>
    <div>
        <a href="{{ route('clientes.show', $cliente->idCliente) }}" class="btn btn-info">detalhes</a>
        <a href="{{ route('clientes.edit', $cliente->idCliente) }}" class="btn btn-primary">Editar</a>
        <a href="" class="btn btn-primary">criar contato</a>
    </div>
    @endif
@endforeach


    <hr>
   

@stop

