@extends('adminlte::page')

@section('content')
@foreach($vendas as $venda)
        <li>{{$venda ->id_vendas}}</li>
        <li>{{$venda ->dt_venda}}</li>
        <li>{{$venda ->documento}}</li>
        <li>{{$venda ->total_itens}}</li>
        <li>{{$venda ->valor_vendas}}</li>
        <li>{{$venda ->fk_produtos}}</li>
        <br>
        @endforeach
@stop