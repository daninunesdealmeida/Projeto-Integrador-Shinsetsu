@extends('layouts.default')

@section('title', 'EasyService - venda_Itens')

@section('content_header')
<h1>Cadastros Venda Ítens</h1>
@stop

@section('content')
<div class="box-body">

        <div class="row">
                <div class="col-md-8">
                        <a href="{{ route('venda_Itens.create') }}" class="btn btn-primary" style="margin-bottom: 5px;">Novo</a>
                </div>
                {!! Form::open(['name'=> 'form_name', 'route'=>'venda_Itens']) !!}
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
                        <th>quantidade</th>
                        <th>vlr_unitário</th>
                        <th>Produtos</th>
                        <th>Ações</th>
                        </thead>
        <tbody>
                @foreach($venda_Itens as $venda_Item)
                <tr>
                        <td>{{$venda_Item ->id_vendaItens}}</td>
                        <td>{{$venda_Item ->quantidade}}</td>
                        <td>{{$venda_Item ->vlr_unitário}}</td>
                        <td>{{$venda_Item ->fk_produtos}}</td>                       
                        <td>
                                <a href="{{ route('venda_Itens.edit',    ['id_vendaItens'=>\Crypt::encrypt($venda_Item->id_vendaItens)]) }}" class="btn-sm btn-success">Editar</a>
                                <a href="#" onclick="return ConfirmaExclusao({{$venda_Item->id_vendaItens}})" class="btn-sm btn-danger">Remover</a>
                        </td>
                        <br>
                        @endforeach
        </tbody>
</table>
{{$venda_Itens->links()}}

@stop

@section('table-delete')
"venda_Itens"
@endsection