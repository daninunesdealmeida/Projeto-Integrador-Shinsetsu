@extends('adminlte::page')

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
                        <div class="col-md-4">
                                <form action="{{route('produtos')}}" method="get">
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
        <th>Especificações</th>
        <th>Preço</th>
        <th>Qt_Estoque</th>
        <th>Estoque_Mínimo</th>
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
        <td>
         <a href="{{ route('produtos.edit', ['id'=>$produto->id_produtos]) }}" class="btn-sm btn-success">Editar</a>
         <a href="{{ route('produtos.destroy', ['id'=>$produto->id_produtos]) }}" class="btn-sm btn-danger">Remover</a>
        </td>   
        @endforeach
        </tbody>
</table>
{{$produtos->links()}}

@stop