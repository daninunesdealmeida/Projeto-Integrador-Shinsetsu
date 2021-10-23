@extends('adminlte::page')

@section('content')
<h3>Nova Venda Item</h3>
{!!  Form::open(['route'=>'venda_Itens.store'])   !!}

<div class="form-group">

{!! Form::label ('quantidade', 'quantidade:') !!}
{!! Form::text ('quantidade', null, ['class' => 'form-control']) !!}

{!! Form::label ('vlr_unitário', 'vlr_unitário:') !!}
{!! Form::text ('vlr_unitário', null, ['class' => 'form-control']) !!}

{!! Form::label ('fk_produtos', 'Produto:') !!}
    {!! Form::select('fk_produtos',
    app\Models\Produto::orderbY('nome')->pluck('nome', 'id_produtos')->toArray(),
    null, ['class' => 'form-control', 'required' ]) !!}
</div>


<div class="form-group">
{!! Form::submit('Criar Venda Ítem', ['class'=>'btn btn-primary']) !!}
{!! Form::reset('Limpar', ['class'=>'btn btn-default']) !!}

</div>


{!!  Form::close()   !!}


@stop