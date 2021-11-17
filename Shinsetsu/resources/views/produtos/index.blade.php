@extends('layouts.default')

@section('title', 'EasyService - produtos')

@section('content_header')
<h1>Cadastros Produtos</h1>
@stop

@section('content')

<div class="box-body">

        <div class="row">
                <div class="col-md-8">
                        <a href="{{ route('produtos.create') }}" class="btn btn-primary" style="margin-bottom: 5px;">Novo</a>
                </div>
                {!! Form::open(['name'=> 'form_name', 'route'=>'produtos']) !!}
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
                                <th>Especificações</th>
                                <th>Preço</th>
                                <th>Qt_Estoque</th>
                                <th>Estoque_Mínimo</th>
                                <th>Categoria</th>
                                <th>Imagem</th>
                                <th>Ações</th>
                                </thead>
                <tbody>
                        @foreach($produtos as $produto)
                        <tr>
                                <td>{{$produto ->id_produtos}}</td>
                                <td>{{$produto ->nome}}</td>
                                <td>{{$produto ->especificacao}}</td>
                                <td>{{$produto ->preco}}</td>
                                <td>{{$produto ->qt_estoque}}</td>
                                <td>{{$produto ->estoque_minimo}}</td>
                                <td>{{$produto ->categoria->nome}}</td>                                
                                <td>{{$produto ->imagem}}</td>
                                <td>

                                        <a href="{{ route('produtos.edit',    ['id_produtos'=>\Crypt::encrypt($produto->id_produtos)]) }}" class="btn-sm btn-success">Editar</a>
                                        <a href="#" onclick="return ConfirmaExclusao({{$produto->id_produtos}})" class="btn-sm btn-danger">Remover</a>
                                </td>
                                @endforeach
                </tbody>
        </table>
        {{$produtos->links()}}

        @stop

        @section('table-delete')
        "produtos"
        @endsection