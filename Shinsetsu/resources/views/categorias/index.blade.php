@extends('adminlte::page')

@section('content')
<h1>Categorias</h1>
<table class="table table-stripe table-bordered table-hover">
<thead>
        <th>Id</th>
        <th>Nome</th>
        <th>Produtos</th>
</thead>
<tbody>
@foreach($categorias as $categoria)
        <tr>
        <td>{{$categoria ->id_categorias}}</td>
        <td>{{$categoria ->nome}}</td>
        <td>{{$categoria ->fk_produtos}}</td>
        </tr>
        @endforeach
        </tbody>
</table>
@stop