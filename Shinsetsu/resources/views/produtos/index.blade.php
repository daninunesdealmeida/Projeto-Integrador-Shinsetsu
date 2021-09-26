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
<a href="{{ route('produtos.create', []) }}" class="btn btn-info"> Adicionar</a>
@stop