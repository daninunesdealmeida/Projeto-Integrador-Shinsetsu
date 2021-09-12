@extends('adminlte::page')

@section('content')
@foreach($agendamentos as $agendamento)
        <li>{{$agendamento ->id_agendamentos}}</li>
        <li>{{$agendamento ->modalidade}}</li>
        <li>{{$agendamento ->dia}}</li>
        <li>{{$agendamento ->hora}}</li>
        <li>{{$agendamento ->fk_pessoas}}</li>
        <br>
        @endforeach
@stop