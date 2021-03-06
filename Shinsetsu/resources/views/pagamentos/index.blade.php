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
                                <th>Número do Telefone</th>
                                <th>Usuário</th>
                                <th>Vendas</th>
                                <th>Ações</th>
                                </thead>
                <tbody>
                        @foreach($pagamentos as $pagamento)
                        <tr>
                                <td>{{$pagamento ->id_pagamentos}}</td>
                                <td>{{$pagamento ->telefone}}</td>
                                <td>{{$pagamento ->usuario->name}}</td> 
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