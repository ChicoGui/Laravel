@extends('layouts.master')

@section('content')

<h1>Editar Cliente</h1>
<h3> {{ $cliente->razaoSocial}} </h3>
<div class="pull-right">
    {!! Form::open([
            'method' => 'DELETE',
            'route' => ['clientes.destroy', $cliente->idCliente]
        ]) !!}
            {!! Form::submit('excluir cliente', ['class' => 'btn btn-danger']) !!}
        {!! Form::close() !!}
</div>

<hr>

@if(Session::has('flash_message'))
  <div class="alert alert-success">
    {{ Session::get('flash_message') }}
  </div>
@endif

@if($errors->any())
  <div class="alert alert-danger">
    @foreach($errors->all() as $error)
      <p>{{ $error }}</p>
    @endforeach
  </div>
@endif

{!! Form::model($cliente, [
    'method' => 'PATCH',
    'route' => ['clientes.update', $cliente->idCliente]
]) !!}

<div class="form-group">
    {!! Form::label('razaoSocial', 'Razão Social:', ['class' => 'control-label']) !!}
    {!! Form::text('razaoSocial', null, ['class' => 'form-control']) !!}
</div>


<div class="form-check form-check-inline">

   {{ Form::radio('BolAtivo', 1) }} ativo
   {{ Form::radio('BolAtivo', 0) }} inativo


</div>

{!! Form::submit('atualizar', ['class' => 'btn btn-primary']) !!}

{!! Form::close() !!}



<p class="lead"><a href="{{ route('clientes.index') }}">voltar para lista de clientes.</a></p>

@stop

