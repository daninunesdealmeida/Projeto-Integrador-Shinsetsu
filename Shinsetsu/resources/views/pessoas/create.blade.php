@extends('adminlte::page')

@section('content')
<h3>Nova Pessoa</h3>
{!!  Form::open(['route'=>'pessoas.store'])   !!}

<div class="form-group">

{!! Form::label ('nome', 'Nome:') !!}
{!! Form::text ('nome', null, ['class' => 'form-control', 'required' ]) !!}

{!! Form::label ('telefone', 'Telefone:') !!}
{!! Form::text ('telefone', null, ['class' => 'form-control', 'required', 'id' => 'fone']) !!}

{!! Form::label ('Rua', 'Rua:') !!}
{!! Form::text ('Rua', null, ['class' => 'form-control', 'required' ]) !!}

{!! Form::label ('Bairro', 'Bairro:') !!}
{!! Form::text ('Bairro', null, ['class' => 'form-control', 'required' ]) !!}

{!! Form::label ('Cidade', 'Cidade:') !!}
{!! Form::text ('Cidade', null, ['class' => 'form-control', 'required' ]) !!}

{!! Form::label ('CEP', 'CEP:') !!}
{!! Form::text ('CEP', null, ['class' => 'form-control', 'required', 'id' => 'cep' ]) !!}

{!! Form::label ('Complemento', 'Complemento:') !!}
{!! Form::text ('Complemento', null, ['class' => 'form-control', 'required' ]) !!}

{!! Form::label ('CPF', 'CPF:') !!}
{!! Form::text ('CPF', null, ['class' => 'form-control', 'required', 'id' => 'cpf']) !!}

{!! Form::label ('RG', 'RG:') !!}
{!! Form::text ('RG', null, ['class' => 'form-control', 'required', 'id' => 'rg']) !!}

{!! Form::label ('fk_usuarios', 'Usuario:') !!}
    {!! Form::select('fk_usuarios',
    \app\Models\Usuario::orderbY('name')->pluck('name', 'id')->toArray(),
    null, ['class' => 'form-control', 'required' ]) !!}

</div>

<div class="form-group">
{!! Form::submit('Criar Pessoa', ['class'=>'btn btn-primary']) !!}
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