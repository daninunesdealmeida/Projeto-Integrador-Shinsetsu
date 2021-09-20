@extends('adminlte::page')

@section('content')
<h3>Nova Categoria</h3>
{!!  Form::open(['url'=>'categorias/store'])   !!}

<div class="form-group">

{!! Form::label ('id_categorias', 'id_categorias:') !!}
{!! Form::text ('id_categorias', null, ['class' => 'form-control', 'required' ]) !!}

{!! Form::label ('nome', 'Nome:') !!}
{!! Form::text ('nome', null, ['class' => 'form-control', 'required' ]) !!}

{!! Form::label ('fk_produtos', 'Produtos:') !!}
{!! Form::text ('fk_produtos', null, ['class' => 'form-control', 'required' ]) !!}

</div>


<div class="form-group">
{!! Form::submit('Criar Categoria', ['class'=>'btn btn-primary']) !!}
{!! Form::reset('Limpar', ['class'=>'btn btn-default']) !!}

</div>


{!!  Form::close()   !!}









@stop