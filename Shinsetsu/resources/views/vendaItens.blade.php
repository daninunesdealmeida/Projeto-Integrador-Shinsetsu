@extends('adminlte::page')

@section('content')
@foreach($venda_itens as $venda_item)
        <li>{{$venda_itens ->id_vendaItens}}</li>
        <li>{{$venda_itens ->quantidade}}</li>
        <li>{{$venda_itens ->vlr_unitário}}</li>
        <li>{{$venda_itens ->fk_produtos}}</li>
        <br>
        @endforeach
@stop