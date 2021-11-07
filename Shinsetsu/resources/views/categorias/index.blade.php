@extends('layouts.default')

@section('title', 'EasyService - categorias')

@section('content_header')
<h1>Cadastros Categorias</h1>
@stop

@section('content')

<div class="box">
        <div class="box-body">

                <div class="row">
                        <div class="col-md-8">
                                <a href="{{ route('categorias.create') }}" class="btn btn-primary" style="margin-bottom: 5px;">Novo</a>
                        </div>
                        {!! Form::open(['name'=> 'form_name', 'route'=>'categorias']) !!}
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
                                <th>Ações</th>
                        </tr>
                        @foreach($categorias as $categoria)
                        <tr>
                                <td>{{$categoria ->id_categorias}}</td>
                                <td>{{$categoria ->nome}}</td>
                                <td>
                                        <a href="{{ route('categorias.edit',    ['id'=>$categoria->id_categorias]) }}" class="btn-sm btn-success">Editar</a>
                                        <a href="#" onclick="return ConfirmaExclusao({{$categoria->id_categorias}})" class="btn-sm btn-danger">Remover</a>

                                </td>
                        </tr>
                        @endforeach
                </tbody>
        </table>
</div>
<!-- /.box-body -->
<div class="box-footer text-center">
        {{$categorias->links()}}
</div>
<!-- /.box-footer-->
</div>
@stop

@section('table-delete')
"categorias"
@endsection