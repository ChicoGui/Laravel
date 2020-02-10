@extends('layouts.master')

@section('content')

<h1>Criando Contato</h1>
<p class="lead">Preencha os campos abaixo com atenção.</p>
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
    'route' => 'contatos.store'
]) !!}


<div class="form-group">
    {!! Form::label('TipoContato', 'tipo contato:', ['class' => 'control-label']) !!}
    {!! Form::text('TipoContato', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('IdCliente', 'Id Cliente:', ['class' => 'control-label']) !!}
    {!! Form::text('IdCliente', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('DescContato', 'Descrição do contato:', ['class' => 'control-label']) !!}
    {!! Form::text('DescContato', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    <div class="form-check form-check-inline">

   {{ Form::radio('BolAtivo', 1) }} ativo
   {{ Form::radio('BolAtivo', 0) }} inativo


  </div>
</div>

{!! Form::submit('Criar contato', ['class' => 'btn btn-primary']) !!}

{!! Form::close() !!}

<hr>
<p class="lead"><a href="{{ route('contatos.index') }}">voltar para lista de contatos.</a></p>
<hr>
@stop