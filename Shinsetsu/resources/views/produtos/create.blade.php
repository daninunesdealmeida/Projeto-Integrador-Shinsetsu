@extends('adminlte::page')

@section('content')
<h3>Novo Produto</h3>
{!!  Form::open(['url'=>'produtos/store'])   !!}

<div class="form-group">

{!! Form::label ('id_produtos', 'id_produtos:') !!}
{!! Form::text ('id_produtos', null, ['class' => 'form-control', 'required' ]) !!}

{!! Form::label ('nome', 'Nome:') !!}
{!! Form::text ('nome', null, ['class' => 'form-control']) !!}

{!! Form::label ('especificacao', 'Especificação:') !!}
{!! Form::text ('especificacao', null, ['class' => 'form-control']) !!}

{!! Form::label ('preco', 'Preço:') !!}
{!! Form::text ('preco', null, ['class' => 'form-control']) !!}

{!! Form::label ('qt_estoque', 'qt_estoque:') !!}
{!! Form::text ('qt_estoque', null, ['class' => 'form-control']) !!}

{!! Form::label ('estoque_minimo', 'estoque_minimo:') !!}
{!! Form::text ('estoque_minimo', null, ['class' => 'form-control', 'required' ]) !!}

</div>

<div class="form-group">
{!! Form::submit('Criar Produto', ['class'=>'btn btn-primary']) !!}
{!! Form::reset('Limpar', ['class'=>'btn btn-default']) !!}

</div>

{!!  Form::close()   !!}

@stop