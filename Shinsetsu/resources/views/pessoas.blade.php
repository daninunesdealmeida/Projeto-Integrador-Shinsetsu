@extends('adminlte::page')

@section('content')
@foreach($pessoas as $pessoa)
        <li>{{$pessoa ->id_pessoas}}</li>
        <li>{{$pessoa ->nome}}</li>
        <li>{{$pessoa ->telefone}}</li>
        <li>{{$pessoa ->Rua}}</li>
        <li>{{$pessoa ->Bairro}}</li>
        <li>{{$pessoa ->Cidade}}</li>
        <li>{{$pessoa ->CEP}}</li>
        <li>{{$pessoa ->CPF}}</li>
        <li>{{$pessoa ->RG}}</li>
        <li>{{$agendamento ->fk_usuarios}}</li>      
        <br>
        @endforeach
@stop