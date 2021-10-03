@extends('adminlte::page')

@section('content')
<h3>Nova Pessoa</h3>
{!!  Form::open(['route'=>'pessoas.store'])   !!}

<div class="form-group">

{!! Form::label ('id_pessoas', 'id_pessoas:') !!}
{!! Form::text ('id_pessoas', null, ['class' => 'form-control', 'required' ]) !!}

{!! Form::label ('nome', 'Nome:') !!}
{!! Form::text ('nome', null, ['class' => 'form-control', 'required' ]) !!}

{!! Form::label ('telefone', 'Telefone:') !!}
{!! Form::text ('telefone', null, ['class' => 'form-control', 'required' ]) !!}

{!! Form::label ('Rua', 'Rua:') !!}
{!! Form::text ('Rua', null, ['class' => 'form-control', 'required' ]) !!}

{!! Form::label ('Bairro', 'Bairro:') !!}
{!! Form::text ('Bairro', null, ['class' => 'form-control', 'required' ]) !!}

{!! Form::label ('Cidade', 'Cidade:') !!}
{!! Form::text ('Cidade', null, ['class' => 'form-control', 'required' ]) !!}

{!! Form::label ('CEP', 'CEP:') !!}
{!! Form::text ('CEP', null, ['class' => 'form-control', 'required' ]) !!}

{!! Form::label ('Complemento', 'Complemento:') !!}
{!! Form::text ('Complemento', null, ['class' => 'form-control', 'required' ]) !!}

{!! Form::label ('CPF', 'CPF:') !!}
{!! Form::text ('CPF', null, ['class' => 'form-control', 'required' ]) !!}

{!! Form::label ('RG', 'RG:') !!}
{!! Form::text ('RG', null, ['class' => 'form-control', 'required' ]) !!}

{!! Form::label ('Usuario', 'Usuario:') !!}
{!! Form::text ('fk_usuarios', null, ['class' => 'form-control', 'required' ]) !!}

</div>

<div class="form-group">
{!! Form::submit('Criar Pessoa', ['class'=>'btn btn-primary']) !!}
{!! Form::reset('Limpar', ['class'=>'btn btn-default']) !!}

</div>


{!!  Form::close()   !!}

@stop