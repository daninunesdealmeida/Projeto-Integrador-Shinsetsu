@extends('adminlte::page')

@section('content')
<h1>Pagamentos</h1>
<table class="table table-stripe table-bordered table-hover">
<thead>
        <th>Id</th>
        <th>Cartão</th>
        <th>Nome_Cartão</th>
        <th>Data_Vencimento</th>
        <th>Boleto</th>
        <th>Vendas</th>
</thead>
<tbody>
@foreach($pagamentos as $pagamento)
        <tr>
        <td>{{$pagamento ->id_pagamentos}}</td>
        <td>{{$pagamento ->cartao}}</td>
        <td>{{$pagamento ->nome_cartao}}</td>
        <td>{{$pagamento ->dt_vencimento}}</td>        
        <td>{{$pagamento ->boleto}}</td>  
        <td>{{$pagamento ->fk_vendas}}</td>
        @endforeach
        </tbody>
</table>
@stop