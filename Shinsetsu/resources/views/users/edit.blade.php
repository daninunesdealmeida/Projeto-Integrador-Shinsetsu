@extends('adminlte::page')

@section('content')
<h3>Editando user: {{$user->id}}</h3>

@if($errors->any())
<ul class="alert alert-danger">
    @foreach ($errors -> all as $erro)
    <li>{{ error }}</li>
    @endforeach
</ul>
@endif

{!! Form::open(['route'=>["users.update", 'id'=>$user->id], 'method'=>'put']) !!}

<div class="form-group">

    {!! Form::label ('name', 'Nome:') !!}
    {!! Form::text ('name', $user->name, ['class' => 'form-control']) !!}

    {!! Form::label ('email', 'email:') !!}
    {!! Form::text ('email', $user->email, ['class' => 'form-control']) !!}

    {!! Form::label ('email_verified_at', 'email_verified_at:') !!}
    {!! Form::text ('email_verified_at', $user->email_verified_at, ['class' => 'form-control']) !!}

    {!! Form::label ('password', 'password:') !!}
    {!! Form::text ('password', $user->password, ['class' => 'form-control']) !!}

    {!! Form::label ('isAdmin', 'isAdmin:') !!}
    {!! Form::text ('isAdmin', $user->isAdmin, ['class' => 'form-control', 'required' ]) !!}

    <div class="form-group">
        {!! Form::submit('Editar users', ['class'=>'btn btn-primary']) !!}
        {!! Form::reset('Limpar', ['class'=>'btn btn-default']) !!}

    </div>


    {!! Form::close() !!}

    @stop