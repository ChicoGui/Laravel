
@extends('layouts.master')

@section('content')

<h3>{{ $cliente->razaoSocial }}</h3>
<!--p class="lead">{{ $cliente->BolAtivo }}</p-->
criado em: {{ $cliente->created_at->format('d/m/Y')}} || ultima atualização: {{ $cliente->updated_at->format('d/m/Y H:i:s')}}

<p class="lead">
@if ($cliente->BolAtivo === 1)
	Satatus: Ativo
@elseif ($cliente->BolAtivo === 0)
    Status: inativo
@endif
</p>
<hr>



<!-- <a href="{{ route('clientes.index') }}" class="btn btn-info">lista de clientes</a> -->
<div>
<a href="{{ route('clientes.edit', $cliente->id) }}" class="btn btn-primary">Editar cliente</a>

</div>

<hr>



<p class="lead"><a href="{{ route('clientes.index') }}">voltar para lista de clientes.</a></p>

@stop