@extends('adminlte::page')

@section('content')
<h3>Editando Categorias: {{$categorias->id_categorias}}</h3>

@if($errors->any())
<ul class="alert alert-danger">
@foreach ($errors -> all as $erro)
    <li>{{ error }}</li>
@endforeach
</ul>
@endif

{!!  Form::open(['route'=>["categorias.update", 'id'=>$categorias->id_categorias], 'method'=>'put'])   !!}

<div class="form-group">

{!! Form::label ('nome', 'Nome:') !!}
{!! Form::text ('nome', $categorias->nome, ['class' => 'form-control', 'required' ]) !!}

</div>


<div class="form-group">
{!! Form::submit('Editar Categorias', ['class'=>'btn btn-primary']) !!}
{!! Form::reset('Limpar', ['class'=>'btn btn-default']) !!}

</div>


{!!  Form::close()   !!}

@stop