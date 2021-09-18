@extends('adminlte::page')

@section('content')
<h1>Vendas</h1>
<table class="table table-stripe table-bordered table-hover">
<thead>
        <th>Id</th>
        <th>Data_Venda</th>
        <th>Documento</th>
        <th>Total_Itens</th>
        <th>Valor_Vendas</th>
        <th>Produtos</th>
</thead>
<tbody>
@foreach($vendas as $venda)
        <tr>
        <td>{{$venda ->id_vendas}}</td>
        <td>{{$venda ->dt_venda}}</td>
        <td>{{$venda ->documento}}</td>
        <td>{{$venda ->total_itens}}</td>
        <td>{{$venda ->valor_vendas}}</td>
        <td>{{$venda ->fk_produtos}}</td>
        <br>
        @endforeach
        </tbody>
</table>
@stop