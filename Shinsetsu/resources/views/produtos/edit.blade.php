@extends('adminlte::page')

@section('content')
<h3>Editando Produto: {{$produtos->id_produtos}}</h3>

@if($errors->any())
<ul class="alert alert-danger">
@foreach ($errors -> all as $erro)
    <li>{{ error }}</li>
@endforeach
</ul>
@endif

{!!  Form::open(['route'=>["produtos.update", 'id'=>$produtos->id_produtos], 'method'=>'put'])   !!}

<div class="form-group">

{!! Form::label ('id_produtos', 'id_produtos:') !!}
{!! Form::text ('id_produtos', $produtos->id_produtos, ['class' => 'form-control', 'required' ]) !!}

{!! Form::label ('nome', 'Nome:') !!}
{!! Form::text ('nome', $produtos->nome, ['class' => 'form-control']) !!}

{!! Form::label ('especificacao', 'Especificação:') !!}
{!! Form::text ('especificacao', $produtos->especificacao, ['class' => 'form-control']) !!}

{!! Form::label ('preco', 'Preço:') !!}
{!! Form::text ('preco', $produtos->preco, ['class' => 'form-control']) !!}

{!! Form::label ('qt_estoque', 'qt_estoque:') !!}
{!! Form::text ('qt_estoque', $produtos->qt_estoque, ['class' => 'form-control']) !!}

{!! Form::label ('estoque_minimo', 'estoque_minimo:') !!}
{!! Form::text ('estoque_minimo', $produtos->estoque_minimo, ['class' => 'form-control', 'required' ]) !!}


<div class="form-group">
{!! Form::submit('Editar Produtos', ['class'=>'btn btn-primary']) !!}
{!! Form::reset('Limpar', ['class'=>'btn btn-default']) !!}

</div>


{!!  Form::close()   !!}

@stop