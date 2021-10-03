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
        <th>Ações</th>
</thead>
<tbody>
@foreach($vendas as $venda)
        <tr>
        <td>{{$venda ->id_vendas}}</td>
        <td> {{ Carbon\Carbon::parse($venda ->dt_venda)->format('d/m/Y') }} </td>   
        <td>{{$venda ->documento}}</td>
        <td>{{$venda ->total_itens}}</td>
        <td>{{$venda ->valor_vendas}}</td>        
        <td>
         <a href="{{ route('vendas.edit', ['id'=>$venda->id_vendas]) }}" class="btn-sm btn-success">Editar</a>
         <a href="{{ route('vendas.destroy', ['id'=>$venda->id_vendas]) }}" class="btn-sm btn-danger">Remover</a>
        </td>
        <br>
        @endforeach
        </tbody>
</table>
{{$vendas->links()}}
<a href="{{ route('vendas.create', []) }}" class="btn btn-info">Adicionar</a>
@stop