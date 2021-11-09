@extends('adminlte::page')

@section('content')
<h3>Novo Produto</h3>
{!! Form::open(['route'=>'produtos.store']) !!}

<div class="form-group">

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

    {!! Form::label ('fk_categoria', 'Categoria do Produto:') !!}
    {!! Form::select('fk_categoria',
    App\Models\Categoria::orderbY('nome')->pluck('nome', 'id_categorias')->toArray(),
    null, ['class' => 'form-control', 'required' ]) !!}

    {!! Form::label ('imagem', 'Imagem:') !!}
    {!! Form::text ('imagem', null, ['class' => 'form-control']) !!}


</div>

<div class="form-group">
    {!! Form::submit('Criar Produto', ['class'=>'btn btn-primary']) !!}
    {!! Form::reset('Limpar', ['class'=>'btn btn-default']) !!}

</div>

{!! Form::close() !!}

@stop