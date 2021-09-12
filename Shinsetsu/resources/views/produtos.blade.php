@extends('adminlte::page')

@section('content')
@foreach($produtos as $produto)
        <li>{{$produto ->id_produto}}</li>
        <li>{{$produto ->nome}}</li>
        <li>{{$produto ->especificacao}}</li>
        <li>{{$produto ->preco}}</li>
        <li>{{$produto ->qt_estoque}}</li>
        <li>{{$produto ->estoque_minimo}}</li>      
        <br>
        @endforeach
@stop