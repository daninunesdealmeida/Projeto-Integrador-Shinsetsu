@extends('layouts.default')

@section('title', 'EasyService - users')

@section('content_header')
<h1>Cadastros Users</h1>
@stop

@section('content')
<div class="box">
        <div class="box-body">

                <div class="row">
                        <div class="col-md-8">
                                <a href="{{ route('users.create') }}" class="btn btn-primary" style="margin-bottom: 5px;">Novo</a>
                        </div>
                        {!! Form::open(['name'=> 'form_name', 'route'=>'users']) !!}
                        <div class="sidebar-form">
                                <div class="input-group">
                                        <input type="text" name="desc_filtro" class="form-control" style="width:80% !important;" placeholder="Pesquisa...">
                                        <span class="input-group-btn">
                                                <button type="submit" name="search" id="search-btn" class="btn btn-primary">
                                                        <i class="fa fa-search"></i>
                                                </button>
                                        </span>
                                </div>
                        </div>
                        {!! Form::close() !!}
                        </div>
                </div>

                <table class="table table-striped">
                        <tbody>
                                <tr>
        <th>Id</th>
        <th>Nome</th>
        <th>Email</th>
        <th>Posição</th>
        <th>Ações</th>
</thead>
<tbody>
@foreach($users as $user)
        <tr>
        <td>{{$user ->id}}</td>
        <td>{{$user ->name}}</td>
        <td>{{$user ->email}}</td>
        <td>{{$user ->isAdmin}}</td> 
        <td>

        <a href="{{ route('users.edit',    ['id'=>\Crypt::encrypt($user->id)]) }}" class="btn-sm btn-success">Editar</a>
         <a href="#" onclick="return ConfirmaExclusao({{$user->id}})" class="btn-sm btn-danger">Remover</a>
        </td>    
        @endforeach
        </tbody>
</table>
{{$users->links()}}

@stop

@section('table-delete')
"users"
@endsection