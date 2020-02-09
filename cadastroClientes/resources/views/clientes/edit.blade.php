@extends('layouts.master')

@section('content')

<h1>Editar Cliente - {{ $cliente->razaoSocial}} </h1>
<p class="lead">Editando Cliente. <a href="{{ route('clientes.index') }}">voltar para lista de clientes.</a></p>
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
    'route' => ['clientes.update', $cliente->id]
]) !!}

<div class="form-group">
    {!! Form::label('razaoSocial', 'raaoSocial:', ['class' => 'control-label']) !!}
    {!! Form::text('razaoSocial', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('BolAtivo', 'BolAtivo:', ['class' => 'control-label']) !!}
    {!! Form::textarea('BolAtivo', null, ['class' => 'form-control']) !!}
</div>

{!! Form::submit('atualizar', ['class' => 'btn btn-primary']) !!}

{!! Form::close() !!}

@stop