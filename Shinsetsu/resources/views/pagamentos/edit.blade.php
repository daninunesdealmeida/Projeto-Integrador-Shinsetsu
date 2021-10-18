@extends('adminlte::page')

@section('content')
<h3>Editando Pagamentos: {{$pagamentos->id_pagamentos}}</h3>

@if($errors->any())
<ul class="alert alert-danger">
@foreach ($errors -> all as $erro)
    <li>{{ error }}</li>
@endforeach
</ul>
@endif

{!!  Form::open(['route'=>["pagamentos.update", 'id'=>$pagamentos->id_pagamentos], 'method'=>'put'])   !!}

<div class="form-group">
{!! Form::label ('id_pagamentos', 'id_pagamentos:') !!}
{!! Form::text ('id_pagamentos', $pagamentos->id_pagamentos, ['class' => 'form-control', 'required' ]) !!}

{!! Form::label ('cartao', 'Número_Cartao:') !!}
{!! Form::text ('cartao', $pagamentos->cartao, ['class' => 'form-control']) !!}

{!! Form::label ('nome_cartao', 'Nome_cartao:') !!}
{!! Form::text ('nome_cartao', $pagamentos->nome_cartao, ['class' => 'form-control']) !!}

{!! Form::label ('dt_vencimento', 'Dt_vencimento:') !!}
{!! Form::date ('dt_vencimento', $pagamentos->Dt_vencimento, ['class' => 'form-control']) !!}

{!! Form::label ('boleto', 'Boleto:') !!}
{!! Form::text ('boleto', $pagamentos->boleto, ['class' => 'form-control']) !!}

{!! Form::label ('fk_vendas', 'Venda:') !!}
    {!! Form::select('fk_vendas',
    \app\Models\Venda::orderBy('documento')->pluck('documento', 'id_vendas')->toArray(),
    $agendamentos->fk_vendas, ['class' => 'form-control', 'required' ]) !!}


</div>


<div class="form-group">
{!! Form::submit('Editar Pagamentos', ['class'=>'btn btn-primary']) !!}
{!! Form::reset('Limpar', ['class'=>'btn btn-default']) !!}

</div>


{!!  Form::close()   !!}

@stop