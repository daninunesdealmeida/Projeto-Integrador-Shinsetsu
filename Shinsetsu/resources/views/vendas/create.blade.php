@extends('adminlte::page')

@section('content')
<h3>Nova Venda</h3>
{!!  Form::open(['url'=>'vendas/store'])   !!}

<div class="form-group">

{!! Form::label ('id_vendas', 'id_vendas:') !!}
{!! Form::text ('id_vendas', null, ['class' => 'form-control', 'required' ]) !!}

{!! Form::label ('dt_venda', 'dt_venda:') !!}
{!! Form::date ('dt_venda', null, ['class' => 'form-control']) !!}

{!! Form::label ('documento', 'Documento:') !!}
{!! Form::text ('documento', null, ['class' => 'form-control']) !!}

{!! Form::label ('total_itens', 'total_itens:') !!}
{!! Form::text ('total_itens', null, ['class' => 'form-control']) !!}

{!! Form::label ('valor_vendas', 'valor_vendas:') !!}
{!! Form::text ('valor_vendas', null, ['class' => 'form-control']) !!}

{!! Form::label ('fk_produtos', 'Produtos:') !!}
{!! Form::text ('fk_produtos', null, ['class' => 'form-control', 'required' ]) !!}

</div>

<div class="form-group">
{!! Form::submit('Criar Venda', ['class'=>'btn btn-primary']) !!}
{!! Form::reset('Limpar', ['class'=>'btn btn-default']) !!}

</div>

{!!  Form::close()   !!}
@stop