@extends('layouts.master')

@section('content')

<h1>Cadastrando cliente</h1>
<p class="lead">Adicionar cliente.</p>
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

{!! Form::open([
    'route' => 'clientes.store'
]) !!}

<div class="form-group">
    {!! Form::label('razaoSocial', 'razaoSocial:', ['class' => 'control-label']) !!}
    {!! Form::text('razaoSocial', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('BolAtivo', 'BolAtivo:', ['class' => 'control-label']) !!}
    {!! Form::text('BolAtivo', null, ['class' => 'form-control']) !!}
</div>

{!! Form::submit('Cadastrar', ['class' => 'btn btn-primary']) !!}

{!! Form::close() !!}

@stop