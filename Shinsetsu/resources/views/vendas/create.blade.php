@extends('adminlte::page')

@section('content')
<h3>Nova Venda</h3>
{!! Form::open(['route'=>'vendas.store']) !!}

<div class="form-group">

    {!! Form::label ('dt_venda', 'Data da Venda:') !!}
    {!! Form::date ('dt_venda', null, ['class' => 'form-control']) !!}

    {!! Form::label ('total_itens', 'Total de itens:') !!}
    {!! Form::text ('total_itens', null, ['class' => 'form-control']) !!}

    {!! Form::label ('valor_vendas', 'Valor da Venda:') !!}
    {!! Form::text ('valor_vendas', null, ['class' => 'form-control']) !!}

    {!! Form::label ('fk_usuarios', 'Usuario:') !!}
    {!! Form::select('fk_usuarios',
    \app\Models\Usuario::orderbY('name')->pluck('name', 'id')->toArray(),
    null, ['class' => 'form-control', 'required' ]) !!}

    {!! Form::label ('fk_itens', 'itens da venda:') !!}
    {!! Form::select('fk_itens',
    \app\Models\Venda_Item::orderbY('id_vendaItens')->pluck('quantidade', 'id_vendaItens')->toArray(),
    null, ['class' => 'form-control', 'required' ]) !!}    

</div>

<div class="form-group">
    {!! Form::submit('Criar Venda', ['class'=>'btn btn-primary']) !!}
    {!! Form::reset('Limpar', ['class'=>'btn btn-default']) !!}

</div>

{!! Form::close() !!}
@stop