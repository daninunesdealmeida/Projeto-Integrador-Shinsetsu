@extends('adminlte::page')

@section('title', 'EasyService - Agendamentos')

@section('content_header')
<h1>Cadastros Agendamentos</h1>
@stop

@section('content')
<div class="box">

        <div class="box-body">

                <div class="row">
                        <div class="col-md-8">
                                <a href="{{ route('agendamentos.create') }}" class="btn btn-primary" style="margin-bottom: 5px;">Novo</a>
                        </div>
                        <div class="col-md-4">
                                <form action="{{route('agendamentos')}}" method="get">
                                        <div class="form-group">
                                                <div class="input-group input-group">
                                                        <input type="text" name="filtragem" class="form-control" style="width:100%;" placeholder="Pesquisa...">
                                                        <span class="input-group-btn">
                                                                <button type="submit" name="search" id="search-btn" class="btn btn-primary">
                                                                        <i class="fa fa-search"></i>
                                                                </button>
                                                        </span>
                                                </div>
                                        </div>
                                </form>
                        </div>
                </div>

                <table class="table table-striped">
                        <tbody>
                                <tr>
                                        <th>Id</th>
                                        <th>Modalidade</th>
                                        <th>Dia</th>
                                        <th>Hora</th>
                                        <th>Pessoas</th>
                                        <th>Ações</th>
                                </tr>
                                @foreach($agendamentos as $agendamento)
                                <tr>
                                        <td>{{$agendamento ->id_agendamentos}}</td>
                                        <td>{{$agendamento ->modalidade}}</td>
                                        <td>{{ Carbon\Carbon::parse($agendamento ->dia)->format('d/m/Y') }}</td>
                                        <td>{{$agendamento ->hora}}</td>
                                        <td>{{$agendamento ->pessoa->nome}}</td>
                                        <td>
                                                <a href="{{ route('agendamentos.edit',    ['id'=>$agendamento->id_agendamentos]) }}" class="btn-sm btn-success">Editar</a>
                                                <a href="{{ route('agendamentos.destroy', ['id'=>$agendamento->id_agendamentos]) }}" class="btn-sm btn-danger">Remover</a>
                                        </td>
                                </tr>
                                @endforeach
                        </tbody>
                </table>
        </div>
        <!-- /.box-body -->
        <div class="box-footer text-center">
                {{$agendamentos->links()}}
        </div>
        <!-- /.box-footer-->
</div>
@endsection

@section('table-delete')
"agendamento"
@endsection