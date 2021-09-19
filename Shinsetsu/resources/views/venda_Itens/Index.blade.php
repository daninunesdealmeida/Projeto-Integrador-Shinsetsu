@extends('adminlte::page')

@section('content')
<h1>Venda Ítens</h1>
<table class="table table-stripe table-bordered table-hover">
<thead>
        <th>Id</th>
        <th>quantidade</th>
        <th>vlr_unitário</th>
        <th>Produtos</th>
</thead>
<tbody>
@foreach($venda_itens as $venda_item)
<tr>
        <td>{{$venda_item ->id_vendaItens}}</td>
        <td>{{$venda_item ->quantidade}}</td>
        <td>{{$venda_item ->vlr_unitário}}</td>
        <td>{{$venda_item ->fk_produtos}}</td>
        <br>     
        @endforeach
        </tbody>
</table>
@stop