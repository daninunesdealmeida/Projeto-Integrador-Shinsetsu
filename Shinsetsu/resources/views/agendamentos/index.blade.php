@extends('adminlte::page')

@section('content')
<h1>Agendamentos</h1>
<table class="table table-stripe table-bordered table-hover">
<thead>
        <th>Id</th>
        <th>Modalidade</th>
        <th>Dia</th>
        <th>Hora</th>
        <th>Pessoas</th>
</thead>
<tbody>
@foreach($agendamentos as $agendamento)
        <tr>
        <td>{{$agendamento ->id_agendamentos}}</td>
        <td>{{$agendamento ->modalidade}}</td>
        <td>{{$agendamento ->dia}}</td>
        <td>{{$agendamento ->hora}}</td>
        <td>{{$agendamento ->fk_pessoas}}</td>
        </tr>
        @endforeach
        </tbody>
</table>
@stop