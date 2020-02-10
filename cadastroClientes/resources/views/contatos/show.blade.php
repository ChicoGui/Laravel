
@extends('layouts.master')

@section('content')

<h3>{{ $contato->DescContato}}</h3>
<!--p class="lead">{{ $contato->BolAtivo }}</p-->
criado em: {{ $contato->created_at->format('d/m/Y')}} || ultima atualização: {{ $contato->updated_at->format('d/m/Y H:i:s')}}

<p class="lead">
@if ($contato->BolAtivo === 1)
	Satatus: Ativo
@elseif ($contato->BolAtivo === 0)
    Status: inativo
@endif
</p>
<hr>



<!-- <a href="{{ route('clientes.index') }}" class="btn btn-info">lista de clientes</a> -->
<div>
<a href="{{ route('contatos.edit', $contato->idContato) }}" class="btn btn-primary">Editar contato</a>

</div>

<hr>



<p class="lead"><a href="{{ route('contatos.index') }}">voltar para lista de contatos.</a></p>

@stop