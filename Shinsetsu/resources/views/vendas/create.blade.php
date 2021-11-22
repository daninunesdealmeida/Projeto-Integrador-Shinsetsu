@extends('adminlte::page')

@section('content')
<h3>Nova Venda</h3>
{!! Form::open(['route'=>'vendas.store']) !!}

<div class="form-group">

    {!! Form::label ('dt_venda', 'dt_venda:') !!}
    {!! Form::date ('dt_venda', null, ['class' => 'form-control']) !!}

    {!! Form::label ('total_itens', 'total_itens:') !!}
    {!! Form::text ('total_itens', null, ['class' => 'form-control']) !!}

    {!! Form::label ('valor_vendas', 'valor_vendas:') !!}
    {!! Form::text ('valor_vendas', null, ['class' => 'form-control']) !!}

    {!! Form::label ('fk_usuarios', 'Usuario:') !!}
    {!! Form::select('fk_usuarios',
    \app\Models\Usuario::orderbY('name')->pluck('name', 'id')->toArray(),
    null, ['class' => 'form-control', 'required' ]) !!}
    

</div>

<div class="form-group">
    {!! Form::submit('Criar Venda', ['class'=>'btn btn-primary']) !!}
    {!! Form::reset('Limpar', ['class'=>'btn btn-default']) !!}

</div>

{!! Form::close() !!}
@stop