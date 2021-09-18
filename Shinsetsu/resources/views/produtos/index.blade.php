@extends('adminlte::page')

@section('content')
<h1>Produtos</h1>
<table class="table table-stripe table-bordered table-hover">
<thead>
        <th>Id</th>
        <th>Nome</th>
        <th>Especificações</th>
        <th>Preço</th>
        <th>Qt_Estoque</th>
        <th>Estoque_Mínimo</th>
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
        @endforeach
        </tbody>
</table>
@stop