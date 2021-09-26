@extends('adminlte::page')

@section('content')
<h3>Editando Agendamento: {{$agendamentos->id_agendamentos}}</h3>

@if($errors->any())
<ul class="alert alert-danger">
@foreach ($errors -> all as $erro)
    <li>{{ error }}</li>
@endforeach
</ul>
@endif

{!!  Form::open(['route'=>["agendamentos.update", 'id'=>$agendamentos->id_agendamentos], 'method'=>'put'])   !!}

<div class="form-group">

{!! Form::label ('id_agendamentos', 'id_agendamentos:') !!}
{!! Form::text ('id_agendamentos', $agendamentos->id_agendamentos, ['class' => 'form-control', 'required' ]) !!}

{!! Form::label ('modalidade', 'Modalidade:') !!}
{!! Form::text ('modalidade', $agendamentos->modalidade, ['class' => 'form-control', 'required' ]) !!}

{!! Form::label ('dia', 'Dia:') !!}
{!! Form::date ('dia', $agendamentos->dia, ['class' => 'form-control', 'required' ]) !!}

{!! Form::label ('hora', 'Hora:') !!}
{!! Form::text ('hora', $agendamentos->hora, ['class' => 'form-control', 'required' ]) !!}

{!! Form::label ('fk_pessoas', 'Pessoa:') !!}
{!! Form::text ('fk_pessoas', $agendamentos->fk_pessoas, ['class' => 'form-control', 'required' ]) !!}

</div>


<div class="form-group">
{!! Form::submit('Editar Agendamento', ['class'=>'btn btn-primary']) !!}
{!! Form::reset('Limpar', ['class'=>'btn btn-default']) !!}

</div>


{!!  Form::close()   !!}

@stop