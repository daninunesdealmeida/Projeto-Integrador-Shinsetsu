@extends('layouts.default')

@section('title', 'EasyService - pessoas')

@section('content_header')
<h1>Cadastros Pessoas</h1>
@stop

@section('content')
<div class="box">
        <div class="box-body">

                <div class="row">
                        <div class="col-md-8">
                                <a href="{{ route('pessoas.create') }}" class="btn btn-primary" style="margin-bottom: 5px;">Novo</a>
                        </div>
                        {!! Form::open(['name'=> 'form_name', 'route'=>'pessoas']) !!}
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
        <th>Telefone</th>
        <th>Rua</th>
        <th>Bairro</th>
        <th>Cidade</th>
        <th>CEP</th>
        <th>CPF</th>
        <th>RG</th>
        <th>Usuario</th>
        <th>Ações</th>
</thead>
<tbody>
@foreach($pessoas as $pessoa)
        <tr>
        <td>{{$pessoa ->id_pessoas}}</td>
        <td>{{$pessoa ->nome}}</td>
        <td>{{$pessoa ->telefone}}</td>
        <td>{{$pessoa ->Rua}}</td>
        <td>{{$pessoa ->Bairro}}</td>
        <td>{{$pessoa ->Cidade}}</td>
        <td>{{$pessoa ->CEP}}</td>
        <td>{{$pessoa ->CPF}}</td>
        <td>{{$pessoa ->RG}}</td>  
        <td>{{$pessoa ->usuario->name}}</td>  
        <td>
         <a href="{{ route('pessoas.edit', ['id'=>$pessoa->id_pessoas]) }}" class="btn-sm btn-success">Editar</a>
         <a href="#" onclick="return ConfirmaExclusao({{$pessoa->id_pessoas}})" class="btn-sm btn-danger">Remover</a>
        </td>    
        @endforeach
        </tbody>
</table>
{{$pessoas->links()}}

@stop

@section('table-delete')
"pessoas"
@endsection