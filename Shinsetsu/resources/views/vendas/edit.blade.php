@extends('adminlte::page')

@section('content')
<h3>Editando Venda: {{$vendas->id_vendas}}</h3>

@if($errors->any())
<ul class="alert alert-danger">
    @foreach ($errors -> all as $erro)
    <li>{{ error }}</li>
    @endforeach
</ul>
@endif

{!! Form::open(['route'=>["vendas.update", 'id'=>$vendas->id_vendas], 'method'=>'put']) !!}

<div class="form-group">

    {!! Form::label ('dt_venda', 'dt_venda:') !!}
    {!! Form::date ('dt_venda', $vendas->dt_venda, ['class' => 'form-control']) !!}

    {!! Form::label ('total_itens', 'total_itens:') !!}
    {!! Form::text ('total_itens', $vendas->total_itens, ['class' => 'form-control']) !!}

    {!! Form::label ('valor_vendas', 'valor_vendas:') !!}
    {!! Form::text ('valor_vendas', $vendas->valor_vendas, ['class' => 'form-control']) !!}

    {!! Form::label ('fk_users', 'Usuario:') !!}
    {!! Form::select('fk_users',
    \app\Models\Usuario::orderBy('name')->pluck('name', 'id')->toArray(),
    $vendas->fk_users, ['class' => 'form-control', 'required' ]) !!}

    <div class="form-group">
        {!! Form::submit('Editar Vendas', ['class'=>'btn btn-primary']) !!}
        {!! Form::reset('Limpar', ['class'=>'btn btn-default']) !!}

    </div>


    {!! Form::close() !!}

    @stop