
@extends('layouts.master')

@section('content')

<h1>{{ $cliente->razaoSocial }}</h1>
<p class="lead">{{ $cliente->BolAtivo }}</p>
<hr>

<a href="{{ route('clientes.index') }}" class="btn btn-info">lista de clientes</a>
<a href="{{ route('clientes.edit', $cliente->id) }}" class="btn btn-primary">Editar cliente</a>

<div class="pull-right">
    {!! Form::open([
            'method' => 'DELETE',
            'route' => ['clientes.destroy', $cliente->id]
        ]) !!}
            {!! Form::submit('excluir cliente', ['class' => 'btn btn-danger']) !!}
        {!! Form::close() !!}
</div>

@stop