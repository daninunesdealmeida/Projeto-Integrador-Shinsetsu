@extends('adminlte::page')

@section('title', 'EasyService - venda_Item')

@section('content_header')
<h1>Cadastros Gerais</h1>
@stop

@section('content')
<div class="box">
        <div class="box-header with-border">
                <h3 class="box-title">venda_Item</h3>
        </div>

        <div class="box-body">

                <div class="row">
                        <div class="col-md-8">
                                <a href="{{ route('venda_Itens.create') }}" class="btn btn-primary" style="margin-bottom: 5px;">Novo</a>
                        </div>
                        <div class="col-md-4">
                                <form action="{{route('venda_Item')}}" method="get">
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
        <th>quantidade</th>
        <th>vlr_unitário</th>
        <th>Produtos</th>
        <th>Ações</th>
</thead>
<tbody>
@foreach($venda_itens as $venda_item)
<tr>
        <td>{{$venda_item ->id_vendaItens}}</td>
        <td>{{$venda_item ->quantidade}}</td>
        <td>{{$venda_item ->vlr_unitário}}</td>
        <td>{{$venda_item ->produtos->nome}}</td>
        <td>
         <a href="{{ route('venda_Itens.edit', ['id'=>$venda_item->id_vendaItens]) }}" class="btn-sm btn-success">Editar</a>
         <a href="{{ route('venda_Itens.destroy', ['id'=>$venda_item->id_vendaItens]) }}" class="btn-sm btn-danger">Remover</a>
        </td>
        <br>     
        @endforeach
        </tbody>
</table>
{{$venda_itens->links()}}

@stop