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
                                <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal" style="margin-bottom: 5px;">
                                        Relatório:
                                </button>
                                </div>
                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                          <div class="modal-content">
                                            <div class="modal-header">
                                              <h5 class="modal-title" id="exampleModalLabel">Relatório de Vendas</h5>
                                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                              </button>
                                            </div>
                                            {!! Form::open(['route' => 'pdfVendas']) !!}
                                            <div class="modal-body">
                                                {!! Form::label('data_inicial', 'Data Inicial', ['class'=>'letras']) !!}
                                                {!! Form::date('data_inicial', null, ['class' => 'form-control', 'required']) !!}
                                            </div>
                        
                                            <div class="modal-body">
                                                {!! Form::label('data_final', 'Data Final') !!}
                                                {!! Form::date('data_final', null, ['class' => 'form-control', 'required']) !!}
                                            </div>
                                            <div class="modal-footer">
                                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                              <button type="submit" class="btn btn-primary">Gerar</button>
                                            </div>
                                          </div>
                                        </div>
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
        <th>Data da Venda</th>     
        <th>Total de Itens</th>
        <th>Valor das Vendas</th>
        <th>Usuários</th>          
       
</thead>
<tbody>
@foreach($vendas as $venda)
        <tr>
        <td>{{$venda ->id_vendas}}</td>
        <td> {{ Carbon\Carbon::parse($venda ->dt_venda)->format('d/m/Y') }} </td>   
        <td>{{$venda ->total_itens}}</td>
        <td>{{'R$ '.number_format($venda ->valor_vendas, 2, ',', '.')}}</td>   
        <td>{{ucfirst($venda ->usuario->name)}}</td>       
        <td>
        
</td>   
@endforeach

        {{-- <tbody>
        <a href="{{ route('vendas.edit',    ['id_vendas'=>\Crypt::encrypt($venda->id_vendas)]) }}" class="btn-sm btn-success">Editar</a>                                     
         <a href="#" onclick="return ConfirmaExclusao({{$venda->id_vendas}})" class="btn-sm btn-danger">Remover</a>
        </td>
        <br> --}}

        </tbody>
</table>
{{$vendas->links()}}

@stop

@section('table-delete')
        "vendas"
@endsection