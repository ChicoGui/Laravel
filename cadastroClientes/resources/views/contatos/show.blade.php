
@extends('layouts.master')

@section('content')

<h3>{{ $contato->TipoContato }}</h3>
<p class="lead">{{ $contato->DescContato }}</p>
criado em: {{ $contato->created_at->format('d/m/Y')}} || ultima atualização: {{ $contato->updated_at->format('d/m/Y H:i:s')}}
<hr>

<hr>

<hr>

<a href="{{ route('contatos.index') }}" class="btn btn-info">lista de contatos</a>
<div>
<a href="{{ route('contatos.edit', $contato->idContato) }}" class="btn btn-primary">editar contato</a>

</div>

<div class="pull-right">
    {!! Form::open([
            'method' => 'DELETE',
            'route' => ['contatos.destroy', $contato->idContato]
        ]) !!}
            {!! Form::submit('Deletar contato', ['class' => 'btn btn-danger']) !!}
        {!! Form::close() !!}
</div>


<hr>
   

@stop