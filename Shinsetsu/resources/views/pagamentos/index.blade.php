@extends('layouts.default')

@section('title', 'EasyService - pagamentos')

@section('content_header')
<h1>Cadastros Pagamentos</h1>
@stop

@section('content')
<div class="box">

        <div class="box-body">

                <div class="row">
                        <div class="col-md-8">
                                <a href="{{ route('pagamentos.create') }}" class="btn btn-primary" style="margin-bottom: 5px;">Novo</a>
                        </div>
                        {!! Form::open(['name'=> 'form_name', 'route'=>'pagamentos']) !!}
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
                                <th>Cartão</th>
                                <th>Nome_Cartão</th>
                                <th>Numero_Cartão</th>
                                <th>Data_Vencimento</th>
                                <th>Vendas</th>
                                <th>Usuario</th>
                                <th>Ações</th>
                                </thead>
                <tbody>
                        @foreach($pagamentos as $pagamento)
                        <tr>
                                <td>{{$pagamento ->id_pagamentos}}</td>
                                <td>{{$pagamento ->cartao}}</td>
                                <td>{{$pagamento ->nome_cartao}}</td>
                                <td>{{$pagamento ->num_cartao}}</td>
                                <td> {{ Carbon\Carbon::parse($pagamento ->dt_vencimento)->format('d/m/Y') }} </td>
                                <td>{{$pagamento ->fk_usuarios}}</td> 
                                <td>{{$pagamento ->fk_vendas}}</td>  
        
                                <td>
                                        <a href="{{ route('pagamentos.edit', ['id_pagamentos'=>\Crypt::encrypt($pagamento->id_pagamentos)]) }}" class="btn-sm btn-success">Editar</a>
                                        <a href="#" onclick="return ConfirmaExclusao({{$pagamento->id_pagamentos}})" class="btn-sm btn-danger">Remover</a>
                                </td>
                                @endforeach
                </tbody>
        </table>
        {{$pagamentos->links()}}

        @stop

        @section('table-delete')
        "pagamentos"
        @endsection