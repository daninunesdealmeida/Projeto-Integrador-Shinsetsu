@extends('adminlte::page')

@section('content')
@foreach($categorias as $categoria)
        <li>{{$categoria ->id_categorias}}</li>
        <li>{{$categoria ->nome}}</li>
        <li>{{$categoria ->fk_produtos}}</li>
        <br>
        @endforeach
@stop