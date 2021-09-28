@extends('adminlte::page')

@section('content')
<h3>Editando Venda Ítem: {{$venda_Item->id_vendaItens}}</h3>

@if($errors->any())
<ul class="alert alert-danger">
@foreach ($errors -> all as $erro)
    <li>{{ error }}</li>
@endforeach
</ul>
@endif

{!!  Form::open(['route'=>["venda_Itens.update", 'id'=>$venda_Item->id_vendaItens], 'method'=>'put'])   !!}

<div class="form-group">

{!! Form::label ('id_vendaItens', 'id_vendaItens:') !!}
{!! Form::text ('id_vendaItens', $venda_Item->id_vendaItens, ['class' => 'form-control', 'required' ]) !!}

{!! Form::label ('quantidade', 'quantidade:') !!}
{!! Form::text ('quantidade', $venda_Item->quantidade, ['class' => 'form-control']) !!}

{!! Form::label ('vlr_unitário', 'vlr_unitário:') !!}
{!! Form::text ('vlr_unitário', $venda_Item->vlr_unitário, ['class' => 'form-control']) !!}

{!! Form::label ('fk_produtos', 'Produtos:') !!}
{!! Form::text ('fk_produtos', $venda_Item->fk_produtos, ['class' => 'form-control']) !!}



<div class="form-group">
{!! Form::submit('Editar Venda Ítens', ['class'=>'btn btn-primary']) !!}
{!! Form::reset('Limpar', ['class'=>'btn btn-default']) !!}

</div>


{!!  Form::close()   !!}

@stop