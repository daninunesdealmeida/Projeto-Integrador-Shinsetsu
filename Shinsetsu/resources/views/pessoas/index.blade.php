@extends('adminlte::page')

@section('content')
<h1>Pessoas</h1>
<table class="table table-stripe table-bordered table-hover">
<thead>
        <th>Id</th>
        <th>Nome</th>
        <th>Telefone</th>
        <th>Rua</th>
        <th>Bairro</th>
        <th>Cidade</th>
        <th>CEP</th>
        <th>CPF</th>
        <th>RG</th>
        <th>Ações</th>
</thead>
<tbody>
@foreach($pessoas as $pessoa)
        <tr>
        <td>{{$pessoa ->id_pessoas}}</td>
        <td>{{$pessoa ->nome}}</td>
        <td>{{$pessoa ->telefone}}</td>
        <td>{{$pessoa ->Rua}}</td>
        <td>{{$pessoa ->Bairro}}</td>
        <td>{{$pessoa ->Cidade}}</td>
        <td>{{$pessoa ->CEP}}</td>
        <td>{{$pessoa ->CPF}}</td>
        <td>{{$pessoa ->RG}}</td>  
        <td>
         <a href="{{ route('pessoas.edit', ['id'=>$pessoa->id_pessoas]) }}" class="btn-sm btn-success">Editar</a>
         <a href="{{ route('pessoas.destroy', ['id'=>$pessoa->id_pessoas]) }}" class="btn-sm btn-danger">Remover</a>
        </td>    
        @endforeach
        </tbody>
</table>
{{$pessoas->links()}}
<a href="{{ route('pessoas.create', []) }}" class="btn btn-info"> Adicionar</a>
@stop