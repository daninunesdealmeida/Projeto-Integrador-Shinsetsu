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

{!! Form::label ('cartao', 'Tipo_cartao:') !!}
{!! Form::select ('cartao', array('Jiu Jitsu' => 'Jiu Jitsu', 'Judô' => 'Judô'), 'Jiu Jitsu', ['class' => 'form-control' ]) !!}

{!! Form::label ('nome_cartao', 'Nome_cartao:') !!}
{!! Form::text ('nome_cartao', $pagamentos->nome_cartao, ['class' => 'form-control']) !!}

{!! Form::label ('num_cartao', 'Num_cartao:') !!}
{!! Form::text ('num_cartao', $pagamentos->num_cartao, ['class' => 'form-control']) !!}

{!! Form::label ('dt_vencimento', 'Dt_vencimento:') !!}
{!! Form::date ('dt_vencimento', $pagamentos->Dt_vencimento, ['class' => 'form-control']) !!}

{!! Form::label ('fk_vendas', 'Venda:') !!}
{!! Form::select('fk_vendas',
\app\Models\Venda::orderBy('id_vendas')->pluck('id_vendas', 'id_vendas')->toArray(),
$pagamentos->fk_vendas, ['class' => 'form-control', 'required' ]) !!}

{!! Form::label ('fk_usuarios', 'Usuario:') !!}
    {!! Form::select('fk_usuarios',
    \app\Models\Usuario::orderBy('name')->pluck('name', 'id')->toArray(),
    $pagamentos->fk_usuarios, ['class' => 'form-control', 'required' ]) !!}

</div>


<div class="form-group">
{!! Form::submit('Editar Pagamentos', ['class'=>'btn btn-primary']) !!}
{!! Form::reset('Limpar', ['class'=>'btn btn-default']) !!}

</div>


{!!  Form::close()   !!}

@stop

@section('js')
<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

<script>
$(document).ready(function(){
    $('#num_cartao').mask('0000 0000 0000 0000');
});
</script>

@endsection