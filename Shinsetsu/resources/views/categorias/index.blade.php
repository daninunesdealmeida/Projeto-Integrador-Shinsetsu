@extends('adminlte::page')

@section('content')
<h1>Categorias</h1>
<table class="table table-stripe table-bordered table-hover">
<thead>
        <th>Id</th>
        <th>Nome</th>
        <th>Produtos</th>
        <th>Ações</th>
</thead>
<tbody>
@foreach($categorias as $categoria)
        <tr>
        <td>{{$categoria ->id_categorias}}</td>
        <td>{{$categoria ->nome}}</td>
        <td>{{$categoria ->fk_produtos}}</td>
        <td>
         <a href="{{ route('categorias.edit', ['id'=>$categoria->id_categorias]) }}" class="btn-sm btn-success">Editar</a>
         <a href="{{ route('categorias.destroy', ['id'=>$categoria->id_categorias]) }}" class="btn-sm btn-danger">Remover</a>
        </td>
        </tr>
        @endforeach
        </tbody>
</table>
{{$categorias->links()}}
<a href="{{ route('categorias.create', []) }}" class="btn btn-info"> Adicionar</a>
@stop