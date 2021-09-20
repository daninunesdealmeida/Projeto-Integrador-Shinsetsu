@extends('adminlte::page')

@section('content')
<h3>Novo Pagamento</h3>
{!!  Form::open(['url'=>'pagamentos/store'])   !!}

<div class="form-group">

{!! Form::label ('id_pagamentos', 'id_pagamentos:') !!}
{!! Form::text ('id_pagamentos', null, ['class' => 'form-control', 'required' ]) !!}

{!! Form::label ('cartao', 'Número_Cartao:') !!}
{!! Form::text ('cartao', null, ['class' => 'form-control']) !!}

{!! Form::label ('nome_cartao', 'Nome_cartao:') !!}
{!! Form::text ('nome_cartao', null, ['class' => 'form-control']) !!}

{!! Form::label ('dt_vencimento', 'Dt_vencimento:') !!}
{!! Form::date ('dt_vencimento', null, ['class' => 'form-control']) !!}

{!! Form::label ('boleto', 'Boleto:') !!}
{!! Form::text ('boleto', null, ['class' => 'form-control']) !!}

{!! Form::label ('fk_vendas', 'Vendas:') !!}
{!! Form::text ('fk_vendas', null, ['class' => 'form-control', 'required' ]) !!}

</div>


<div class="form-group">
{!! Form::submit('Criar Pagamento', ['class'=>'btn btn-primary']) !!}
{!! Form::reset('Limpar', ['class'=>'btn btn-default']) !!}

</div>


{!!  Form::close()   !!}

@stop