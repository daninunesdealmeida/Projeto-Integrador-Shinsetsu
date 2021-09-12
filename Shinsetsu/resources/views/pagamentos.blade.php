@extends('adminlte::page')

@section('content')
@foreach($pagamentos as $pagamento)
        <li>{{$pagamento ->id_pagamentos}}</li>
        <li>{{$pagamento ->cartao}}</li>
        <li>{{$pagamento ->nome_cartao}}</li>
        <li>{{$pagamento ->dt_vencimento}}</li>        
        <li>{{$pagamento ->boleto}}</li>  
        <li>{{$pagamento ->fk_vendas}}</li>
        <br>
        @endforeach
@stop