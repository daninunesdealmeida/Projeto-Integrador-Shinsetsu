@extends('layouts.default')

@section('title', 'EasyService - vendas')

@section('content_header')
<h1>Cadastros Vendas</h1>
@stop

@section('content')
<div class="box">
        <div class="box-body">

                <div class="row">
                        <div class="col-md-8">
                                <a href="{{ route('vendas.create') }}" class="btn btn-primary" style="margin-bottom: 5px;">Novo</a>
                        </div>
                        {!! Form::open(['name'=> 'form_name', 'route'=>'vendas']) !!}
                <div class="sidebar-form">
                        <div class="input-group">
                                <input type="text" name="desc_filtro" class="form-control" style="width:80% !important;" placeholder="Pesquisa...">
                                <span class="input-group-btn">
                                        <button type="submit" name="search" id="search-btn" class="btn btn-primary">
                                                <i class="fa fa-search"></i>
                                        </button>
                                </span>
                        </div>
                </div>
                {!! Form::close() !!}
                        </div>
                </div>

                <table class="table table-striped">
                        <tbody>
                                <tr>
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
        <td>{{$venda ->total_itens}}</td>
        <td>{{$venda ->valor_vendas}}</td>   
        <td>{{$venda ->usuario->name}}</td>  
                
        <td>

        <a href="{{ route('vendas.edit',    ['id_vendas'=>\Crypt::encrypt($venda->id_vendas)]) }}" class="btn-sm btn-success">Editar</a>                                     
         <a href="#" onclick="return ConfirmaExclusao({{$venda->id_vendas}})" class="btn-sm btn-danger">Remover</a>
        </td>
        <br>
        @endforeach
        </tbody>
</table>
{{$vendas->links()}}

@stop

@section('table-delete')
        "vendas"
        @endsection