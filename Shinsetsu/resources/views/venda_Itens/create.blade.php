@extends('adminlte::page')

@section('content')
<h3>Nova Venda Item</h3>
{!!  Form::open(['url'=>'venda_Itens/store'])   !!}

<div class="form-group">

{!! Form::label ('id_vendaItens', 'id_vendaItens:') !!}
{!! Form::text ('id_vendaItens', null, ['class' => 'form-control', 'required' ]) !!}

{!! Form::label ('quantidade', 'quantidade:') !!}
{!! Form::text ('quantidade', null, ['class' => 'form-control']) !!}

{!! Form::label ('vlr_unitário', 'vlr_unitário:') !!}
{!! Form::text ('vlr_unitário', null, ['class' => 'form-control']) !!}

{!! Form::label ('fk_produtos', 'Produtos:') !!}
{!! Form::text ('fk_produtos', null, ['class' => 'form-control']) !!}

</div>


<div class="form-group">
{!! Form::submit('Criar Venda Ítem', ['class'=>'btn btn-primary']) !!}
{!! Form::reset('Limpar', ['class'=>'btn btn-default']) !!}

</div>


{!!  Form::close()   !!}


@stop