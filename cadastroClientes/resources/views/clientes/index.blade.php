@extends('layouts.master')

@section('content')

<h1>Lista de Clientes</h1>
<p class="lead">todos os clientes. <a href="{{ route('clientes.create') }}">Adcionar novo cliente?</a></p>
<hr>
@foreach($clientes as $cliente)
    <h3>{{ $cliente->razaoSocial }}</h3>
    <p>{{ $cliente->bolAtivo}}</p>
    <p>
        <a href="{{ route('clientes.show', $cliente->id) }}" class="btn btn-info">detalhes</a>
        <a href="{{ route('clientes.edit', $cliente->id) }}" class="btn btn-primary">Editar</a>
    </p>
    <hr>
@endforeach
@stop