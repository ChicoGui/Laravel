@extends('layouts.master')

@section('content')

<h1>Lista de Clientes</h1>
<p class="lead">todos os clientes. <a href="{{ route('clientes.create') }}">Adcionar novo cliente?</a></p>
<hr>

@stop