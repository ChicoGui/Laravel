@extends('layouts.master')

@section('content')

<h1>Página Inicial</h1>
<p class="lead">CRUD Cadastro de Clientes utilizando Laravel</p>
<hr>

<a href="{{ url('clientes') }}" class="btn btn-info">Ver clientes</a>
<a href="{{ url('contatos') }}" class="btn btn-info">Ver contatos</a>
<!--a href="{{ url('clientes/create') }}" class="btn btn-primary">Add novo cliente</a-->


@stop