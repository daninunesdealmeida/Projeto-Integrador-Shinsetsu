@extends('adminlte::page')

@section('title', 'EasyService - pagamentos')

@section('content_header')
<h1>Cadastros Gerais</h1>
@stop

@section('content')
<div class="box">
        <div class="box-header with-border">
                <h3 class="box-title">pagamentos</h3>
        </div>

        <div class="box-body">

                <div class="row">
                        <div class="col-md-8">
                                <a href="{{ route('pagamentos.create') }}" class="btn btn-primary" style="margin-bottom: 5px;">Novo</a>
                        </div>
                        <div class="col-md-4">
                                <form action="{{route('pagamentos')}}" method="get">
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
        <td>{{$pagamento ->vendas->documentos}}</td>
        <td>
         <a href="{{ route('pagamentos.edit', ['id'=>$pagamento->id_pagamentos]) }}" class="btn-sm btn-success">Editar</a>
         <a href="{{ route('pagamentos.destroy', ['id'=>$pagamento->id_pagamentos]) }}" class="btn-sm btn-danger">Remover</a>
        </td>
        @endforeach
        </tbody>
</table>
{{$pagamentos->links()}}

@stop