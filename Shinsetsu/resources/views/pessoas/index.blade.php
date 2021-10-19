@extends('adminlte::page')

@section('title', 'EasyService - pessoas')

@section('content_header')
<h1>Cadastros Gerais</h1>
@stop

@section('content')
<div class="box">
        <div class="box-header with-border">
                <h3 class="box-title">pessoas</h3>
        </div>

        <div class="box-body">

                <div class="row">
                        <div class="col-md-8">
                                <a href="{{ route('pessoas.create') }}" class="btn btn-primary" style="margin-bottom: 5px;">Novo</a>
                        </div>
                        <div class="col-md-4">
                                <form action="{{route('pessoas')}}" method="get">
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
        <th>Nome</th>
        <th>Telefone</th>
        <th>Rua</th>
        <th>Bairro</th>
        <th>Cidade</th>
        <th>CEP</th>
        <th>CPF</th>
        <th>RG</th>
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
        <td>{{$pessoa ->usuario->nome}}</td>  
        <td>
         <a href="{{ route('pessoas.edit', ['id'=>$pessoa->id_pessoas]) }}" class="btn-sm btn-success">Editar</a>
         <a href="{{ route('pessoas.destroy', ['id'=>$pessoa->id_pessoas]) }}" class="btn-sm btn-danger">Remover</a>
        </td>    
        @endforeach
        </tbody>
</table>
{{$pessoas->links()}}

@stop