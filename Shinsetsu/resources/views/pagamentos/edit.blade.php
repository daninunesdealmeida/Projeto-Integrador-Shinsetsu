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

{!! Form::label ('telefone', 'telefone:') !!}
{!! Form::text ('telefone', $pagamentos->telefone, ['class' => 'form-control', 'id' => 'fone']) !!}

{!! Form::label ('fk_vendas', 'Venda:') !!}
{!! Form::select('fk_vendas',
\app\Models\Venda::orderBy('id_vendas')->pluck('id_vendas', 'id_vendas')->toArray(),
$pagamentos->fk_vendas, ['class' => 'form-control', 'required' ]) !!}

{!! Form::label ('fk_users', 'Usuario:') !!}
    {!! Form::select('fk_users',
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
    $('#fone').mask('(00)000000000');
});
</script>

@endsection