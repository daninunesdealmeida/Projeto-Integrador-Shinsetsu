@extends('layouts.default')

@section('title', 'Agendamentos')

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
                        {!! Form::open(['name'=> 'form_name', 'route'=>'agendamentos']) !!}
                        <div class="sidebar-form">
                                <div class="input-group">
                                        <input type="text" name="desc_filtro" class="form-control" style="width:80% !important;" placeholder="Pesquisa...">
                                        <span class="input-group-btn">
                                                <button type="submit" name="search" id="search-btn" class="btn btn-primary">
                                                        <i class="fa fa-search"></i>
                                                </button>
                                        </span>
                                </div>
                        </div>
                        {!! Form::close() !!}
                        </div>
                </div>

                <table class="table table-striped">
                        <tbody>
                                <tr>
                                        <th>Id</th>
                                        <th>Nome</th>
                                        <th>Modalidade</th>
                                        <th>Dia</th>
                                        <th>Hora</th>
                                        <th>Ações</th>
                                </tr>
                                @foreach($agendamentos as $agendamento)
                                <tr>
                                        <td>{{$agendamento ->id_agendamentos}}</td>
                                        <td>{{$agendamento ->nome}}</td>
                                        <td>{{$agendamento ->modalidade}}</td>
                                        <td>{{ Carbon\Carbon::parse($agendamento ->dia)->format('d/m/Y') }}</td>
                                        <td>{{$agendamento ->hora}}</td>
                                        <td>
                                                <a href="{{ route('agendamentos.edit',    ['id_agendamentos'=>\Crypt::encrypt($agendamento->id_agendamentos)]) }}" class="btn-sm btn-success">Editar</a>
                                                <a href="#" onclick="return ConfirmaExclusao({{$agendamento->id_agendamentos}})" class="btn-sm btn-danger">Remover</a>
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
@stop

@section('table-delete')
"agendamentos"
@endsection