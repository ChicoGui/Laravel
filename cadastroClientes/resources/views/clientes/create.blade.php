@extends('layouts.master')

@section('content')

<h1>Cadastro</h1>
<p class="lead"></p>
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
    {!! Form::label('razaoSocial', 'Razão Social:', ['class' => 'control-label']) !!}
    {!! Form::text('razaoSocial', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    <div class="form-check form-check-inline">

   {{ Form::radio('BolAtivo', 1) }} ativo
   {{ Form::radio('BolAtivo', 0) }} inativo


  </div>
</div>


{!! Form::submit('Cadastrar', ['class' => 'btn btn-primary']) !!}

{!! Form::close() !!}


<hr>
<p class="lead"><a href="{{ route('clientes.index') }}">voltar para lista de clientes.</a></p>
<hr>
@stop