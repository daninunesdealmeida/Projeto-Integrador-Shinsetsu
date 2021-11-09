@extends('layouts.default')

@section('content')
<h1>Agendamentos</h1>
<table class="table table-stripe table-bordered table-hover">
<thead>
        <th>Id</th>
        <th>Modalidade</th>
        <th>Dia</th>
        <th>Hora</th>
        <th>Pessoas</th>
        <th>Ações</th>
</thead>
<tbody>
@foreach($agendamentos as $agendamento)
        <tr>
        <td>{{$agendamento ->id_agendamentos}}</td>
        <td>{{$agendamento ->modalidade}}</td>
        <td>{{ Carbon\Carbon::parse($agendamento ->dia)->format('d/m/Y') }}</td>
        <td>{{$agendamento ->hora}}</td>
        <td>
         <a href="{{ route('agendamentos.edit', ['id'=>$agendamento->id_agendamentos]) }}" class="btn-sm btn-success">Editar</a>
         <a href="{{ route('agendamentos.destroy', ['id'=>$agendamento->id_agendamentos]) }}" class="btn-sm btn-danger">Remover</a>
        </td>
        </tr>
        @endforeach
        </tbody>
</table>
{{$agendamentos->links()}}

        <a href="{{ route('agendamentos.create', []) }}" class="btn btn-info"> Adicionar</a>
@stop

@section('table-delete')
"agendamento"
@endsection