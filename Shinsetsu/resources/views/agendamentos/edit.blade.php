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

{!! Form::open(['route'=>["agendamentos.update", 'id'=>$agendamentos->id_agendamentos], 'method'=>'put']) !!}

<div class="form-group">

    {!! Form::label ('modalidade', 'Modalidade:') !!}
    {!! Form::select ('modalidade', array('Jiu Jitsu' => 'Jiu Jitsu', 'Judô' => 'Judô'), 'Jiu Jitsu', ['class' => 'form-control' ]) !!}

    {!! Form::label ('dia', 'Dia:') !!}
    {!! Form::date ('dia', $agendamentos->dia, ['class' => 'form-control' ]) !!}

    {!! Form::label ('hora', 'Hora:') !!}
    {!! Form::text ('hora', $agendamentos->hora, ['class' => 'form-control', 'id' =>'horas' ]) !!}

    {!! Form::label ('fk_pessoas', 'Pessoa:') !!}
    {!! Form::select('fk_pessoas',
    \app\Models\Pessoa::orderBy('nome')->pluck('nome', 'id_pessoas')->toArray(),
    $agendamentos->fk_pessoas, ['class' => 'form-control', 'required' ]) !!}

</div>


<div class="form-group">
    {!! Form::submit('Editar Agendamento', ['class'=>'btn btn-primary']) !!}
    {!! Form::reset('Limpar', ['class'=>'btn btn-default']) !!}

</div>


{!! Form::close() !!}

@stop

@section('js')
<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

<script>
    $(document).ready(function() {
        $('#horas').mask('00:00');
    });
</script>

@endsection