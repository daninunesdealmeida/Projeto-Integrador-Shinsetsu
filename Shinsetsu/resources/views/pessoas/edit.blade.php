@extends('adminlte::page')

@section('content')
<h3>Editando Pessoas: {{$pessoas->id_pessoas}}</h3>

@if($errors->any())
<ul class="alert alert-danger">
@foreach ($errors -> all as $erro)
    <li>{{ error }}</li>
@endforeach
</ul>
@endif

{!!  Form::open(['route'=>["pessoas.update", 'id'=>$pessoas->id_pessoas], 'method'=>'put'])   !!}

<div class="form-group">

{!! Form::label ('nome', 'Nome:') !!}
{!! Form::text ('nome',  $pessoas->nome, ['class' => 'form-control', 'required' ]) !!}

{!! Form::label ('telefone', 'Telefone:') !!}
{!! Form::text ('telefone',  $pessoas->telefone, ['class' => 'form-control', 'required', 'id' => 'fone' ]) !!}

{!! Form::label ('Rua', 'Rua:') !!}
{!! Form::text ('Rua',  $pessoas->Rua, ['class' => 'form-control', 'required' ]) !!}

{!! Form::label ('Bairro', 'Bairro:') !!}
{!! Form::text ('Bairro',  $pessoas->Bairro, ['class' => 'form-control', 'required' ]) !!}

{!! Form::label ('Cidade', 'Cidade:') !!}
{!! Form::text ('Cidade',  $pessoas->Cidade, ['class' => 'form-control', 'required' ]) !!}

{!! Form::label ('CEP', 'CEP:') !!}
{!! Form::text ('CEP',  $pessoas->CEP, ['class' => 'form-control', 'required', 'id' => 'cep' ]) !!}

{!! Form::label ('Complemento', 'Complemento:') !!}
{!! Form::text ('Complemento',  $pessoas->Complemento, ['class' => 'form-control', 'required' ]) !!}

{!! Form::label ('CPF', 'CPF:') !!}
{!! Form::text ('CPF', $pessoas->CPF, ['class' => 'form-control', 'required', 'id' => 'cpf' ]) !!}

{!! Form::label ('RG', 'RG:') !!}
{!! Form::text ('RG', $pessoas->RG, ['class' => 'form-control', 'required', 'id' => 'rg' ]) !!}

{!! Form::label ('fk_usuarios', 'Pessoa:') !!}
    {!! Form::select('fk_usuarios',
    \app\Models\Usuario::orderBy('name')->pluck('name', 'id')->toArray(),
    $pessoas->fk_usuarios, ['class' => 'form-control', 'required' ]) !!}
</div>


<div class="form-group">
{!! Form::submit('Editar Pessoas', ['class'=>'btn btn-primary']) !!}
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
    $('#cep').mask('00000-000');
    $('#cpf').mask('000.000.000-00');
    $('#rg').mask('0000000000');
    $('#fone').mask('(00)000000000');
});
</script>

@endsection