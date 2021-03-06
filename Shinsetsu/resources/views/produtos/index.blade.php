@extends('layouts.default')

@section('title', 'EasyService - produtos')

@section('content_header')
<h1>Cadastros Produtos</h1>
@stop

@section('content')

<div class="box-body">

        <div class="row">
                <div class="col-md-8">
                        <a href="{{ route('produtos.create') }}" class="btn btn-primary" style="margin-bottom: 5px;">Novo</a>
                </div>
                {!! Form::open(['name'=> 'form_name', 'route'=>'produtos']) !!}
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
                                <th>Nome</th>
                                <th>Especificações</th>
                                <th>Preço</th>
                                <th>Quantidade em Estoque</th>
                                <th>Estoque Mínimo</th>
                                <th>Categoria</th>
                                <th>Imagem</th>
                                <th>Ações</th>
                                </thead>
                <tbody>
                        @foreach($produtos as $produto)
                        <tr>
                                <td>{{$produto ->id_produtos}}</td>
                                <td>{{ucfirst($produto ->nome)}}</td>
                                <td>{{ucfirst($produto ->especificacao)}}</td>
                                <td>{{'R$ '.number_format($produto ->preco, 2, ',', '.')}}</td>
                                <td>{{$produto ->qt_estoque}}</td>
                                <td>{{$produto ->estoque_minimo}}</td>
                                <td>{{ucfirst($produto ->categoria->nome)}}</td> 
                                <td><img class="card-img-top" src="img/produtos/{{$produto->imagem}}" width="100%" alt="100px" style="height:100px"></td>                               
                             <td>

                                        <a href="{{ route('produtos.edit',    ['id_produtos'=>\Crypt::encrypt($produto->id_produtos)]) }}" class="btn-sm btn-success">Editar</a>
                                        <a href="#" onclick="return ConfirmaExclusao({{$produto->id_produtos}})" class="btn-sm btn-danger">Remover</a>
                                </td>
                                @endforeach
                </tbody>
        </table>
        {{$produtos->links()}}

        @stop

        @section('table-delete')
        "produtos"
        @endsection