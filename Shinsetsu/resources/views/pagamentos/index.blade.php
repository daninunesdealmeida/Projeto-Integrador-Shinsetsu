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
        <th>Ações</th>
</thead>
<tbody>
@foreach($pagamentos as $pagamento)
        <tr>
        <td>{{$pagamento ->id_pagamentos}}</td>
        <td>{{$pagamento ->cartao}}</td>
        <td>{{$pagamento ->nome_cartao}}</td>
        <td> {{ Carbon\Carbon::parse($pagamento ->dt_vencimento)->format('d/m/Y') }} </td>     
        <td>{{$pagamento ->boleto}}</td>  
        <td>{{$pagamento ->fk_vendas}}</td>
        <td>
         <a href="{{ route('pagamentos.edit', ['id'=>$pagamento->id_pagamentos]) }}" class="btn-sm btn-success">Editar</a>
         <a href="{{ route('pagamentos.destroy', ['id'=>$pagamento->id_pagamentos]) }}" class="btn-sm btn-danger">Remover</a>
        </td>
        @endforeach
        </tbody>
</table>
{{$pagamentos->links()}}
<a href="{{ route('pagamentos.create', []) }}" class="btn btn-info"> Adicionar</a>
@stop