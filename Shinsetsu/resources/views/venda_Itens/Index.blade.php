@extends('adminlte::page')

@section('content')
@foreach($venda_itens as $venda_item)
        <li>{{$venda_item ->id_vendaItens}}</li>
        <li>{{$venda_item ->quantidade}}</li>
        <li>{{$venda_item ->vlr_unitário}}</li>
        <li>{{$venda_item ->fk_produtos}}</li>
        <br>
        @endforeach
@stop