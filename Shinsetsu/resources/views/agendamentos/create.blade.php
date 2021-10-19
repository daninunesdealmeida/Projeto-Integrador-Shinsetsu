@extends('adminlte::page')

@section('content')
<h3>Novo Agendamento</h3>

{!! Form::open(['route'=>'agendamentos.store']) !!}

<div class="form-group">


    {!! Form::label ('modalidade', 'Modalidade:') !!}
    {!! Form::text ('modalidade', null, ['class' => 'form-control', 'required' ]) !!}

    {!! Form::label ('dia', 'Dia:') !!}
    {!! Form::date ('dia', null, ['class' => 'form-control', 'required' ]) !!}

    {!! Form::label ('hora', 'Hora:') !!}
    {!! Form::text ('hora', null, ['class' => 'form-control', 'required' ]) !!}

    {!! Form::label ('fk_pessoas', 'Pessoa:') !!}
    {!! Form::select('fk_pessoas',
    \app\Models\Pessoa::orderbY('nome')->pluck('nome', 'id_pessoas')->toArray(),
    null, ['class' => 'form-control', 'required' ]) !!}



</div>


<div class="form-group">
    {!! Form::submit('Criar Agendamento', ['class'=>'btn btn-primary']) !!}
    {!! Form::reset('Limpar', ['class'=>'btn btn-default']) !!}

</div>


{!! Form::close() !!}

@stop