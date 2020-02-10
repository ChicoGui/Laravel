@extends('layouts.master')

@section('content')


<h1>Editar contato</h1>
<h3> {{ $contato->DescContato}}</h3>

<p class="lead">id Cliente: {{$contato->idCliente}}</p>

<hr>

<div class="pull-right">
    {!! Form::open([
            'method' => 'DELETE',
            'route' => ['contatos.destroy', $contato->idContato]
        ]) !!}
            {!! Form::submit('excluir contato', ['class' => 'btn btn-danger']) !!}
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


{!! Form::model($contato, [
    'method' => 'PATCH',
    'route' => ['contatos.update', $contato->idContato]
]) !!}

<div class="form-group">
    {!! Form::label('TipoContato', 'tipo contato:', ['class' => 'control-label']) !!}
    {!! Form::text('TipoContato', null, ['class' => 'form-control']) !!}
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

{!! Form::submit('Atualizar contato', ['class' => 'btn btn-primary']) !!}

{!! Form::close() !!}

@stop