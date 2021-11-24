@extends('adminlte::page')

@section('content')
<h3>Novo User</h3>
{!! Form::open(['route'=>'users.store']) !!}

<div class="form-group">

    {!! Form::label ('name', 'Nome:') !!}
    {!! Form::text ('name', null, ['class' => 'form-control']) !!}

    {!! Form::label ('email', 'Email:') !!}
    {!! Form::text ('email', null, ['class' => 'form-control']) !!}

    {!! Form::label ('email_verified_at', 'email_verified_at:') !!}
    {!! Form::text ('email_verified_at', null, ['class' => 'form-control']) !!}

    {!! Form::label ('password', 'password:') !!}
    {!! Form::text ('password', null, ['class' => 'form-control']) !!}

    {!! Form::label ('isAdmin', 'Cliente?:') !!}
    {!! Form::checkbox('isAdmin',  null, ['class' => 'form-control']) !!}

</div>

<div class="form-group">
    {!! Form::submit('Criar User', ['class'=>'btn btn-primary']) !!}
    {!! Form::reset('Limpar', ['class'=>'btn btn-default']) !!}

</div>

{!! Form::close() !!}

@stop