@extends('adminlte::page')

@section('content')
<h1>Venda Ítens</h1>
<table class="table table-stripe table-bordered table-hover">
<thead>
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
        <td>{{$venda_item ->fk_produtos}}</td>
        <td>
         <a href="{{ route('venda_Itens.edit', ['id'=>$venda_item->id_vendaItens]) }}" class="btn-sm btn-success">Editar</a>
         <a href="{{ route('venda_Itens.destroy', ['id'=>$venda_item->id_vendaItens]) }}" class="btn-sm btn-danger">Remover</a>
        </td>
        <br>     
        @endforeach
        </tbody>
</table>
{{$venda_itens->links()}}
<a href="{{ route('venda_Itens.create', []) }}" class="btn btn-info"> Adicionar</a>
@stop