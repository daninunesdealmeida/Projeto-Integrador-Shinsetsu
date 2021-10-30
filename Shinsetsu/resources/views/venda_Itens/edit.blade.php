@extends('adminlte::page')

@section('content')
<h3>Editando Produto: {{$venda_Itens->id_vendaItens}}</h3>

@if($errors->any())
<ul class="alert alert-danger">
    @foreach ($errors -> all as $erro)
    <li>{{ error }}</li>
    @endforeach
</ul>
@endif

{!! Form::open(['route'=>["venda_Itens.update", 'id'=>$venda_Itens->id_vendaItens], 'method'=>'put']) !!}

<div class="form-group">

    {!! Form::label ('quantidade', 'quantidade:') !!}
    {!! Form::text ('quantidade', $venda_Itens->quantidade, ['class' => 'form-control']) !!}

    {!! Form::label ('vlr_unitário', 'vlr_unitário:') !!}
    {!! Form::text ('vlr_unitário', $venda_Itens->vlr_unitário, ['class' => 'form-control']) !!}

    {!! Form::label ('fk_produtos', 'Produto:') !!}
    {!! Form::select('fk_produtos',
    app\Models\Produto::orderbY('nome')->pluck('nome', 'id_produtos')->toArray(),
    $venda_Itens->fk_produtos, ['class' => 'form-control', 'required' ]) !!}

    <div class="form-group">
        {!! Form::submit('Editar Venda Ítens', ['class'=>'btn btn-primary']) !!}
        {!! Form::reset('Limpar', ['class'=>'btn btn-default']) !!}

    </div>


    {!! Form::close() !!}

    @stop