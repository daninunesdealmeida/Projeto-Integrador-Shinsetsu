@extends('adminlte::page')

@section('content')
<h3>Novo Agendamento</h3>


{!! Form::open(['route'=>'agendamentos.store']) !!}

<div class="form-group">

    {!! Form::label ('nome', 'Nome:') !!}
    {!! Form::text ('nome', null, ['class' => 'form-control', 'required' ]) !!}

    {!! Form::label ('email', 'Email:') !!}
    {!! Form::text ('email', null, ['class' => 'form-control', 'required' ]) !!}

    {!! Form::label ('modalidade', 'Modalidade:') !!}
    {!! Form::select ('modalidade', array('Jiu Jitsu' => 'Jiu Jitsu', 'Judô' => 'Judô'), 'Jiu Jitsu', ['class' => 'form-control', 'required' ]) !!}

    {!! Form::label ('dia', 'Dia:') !!}
    {!! Form::date ('dia', null, ['class' => 'form-control', 'required' ]) !!}

    {!! Form::label ('hora', 'Hora:') !!}
    {!! Form::text ('hora', null, ['class' => 'form-control','id' => 'horas', 'required' ]) !!}

</div>


<div class="form-group">
    {!! Form::submit('Criar Agendamento', ['class'=>'btn btn-primary']) !!}
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