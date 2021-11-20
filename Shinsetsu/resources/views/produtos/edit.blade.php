@extends('adminlte::page')

@section('content')
<h3>Editando Produto: {{$produtos->id_produtos}}</h3>

@if($errors->any())
<ul class="alert alert-danger">
    @foreach ($errors -> all as $erro)
    <li>{{ error }}</li>
    @endforeach
</ul>
@endif

{!! Form::open(['route'=>["produtos.update", 'id'=>$produtos->id_produtos], 'method'=>'put', 'files'=>true,  'enctype'=>'multipart/form-data']) !!}

<div class="form-group">

    {!! Form::label ('nome', 'Nome:') !!}
    {!! Form::text ('nome', $produtos->nome, ['class' => 'form-control']) !!}

    {!! Form::label ('especificacao', 'Especificação:') !!}
    {!! Form::text ('especificacao', $produtos->especificacao, ['class' => 'form-control']) !!}

    {!! Form::label ('preco', 'Preço:') !!}
    {!! Form::text ('preco', $produtos->preco, ['class' => 'form-control', 'id' => 'money']) !!}

    {!! Form::label ('qt_estoque', 'qt_estoque:') !!}
    {!! Form::text ('qt_estoque', $produtos->qt_estoque, ['class' => 'form-control']) !!}

    {!! Form::label ('estoque_minimo', 'estoque_minimo:') !!}
    {!! Form::text ('estoque_minimo', $produtos->estoque_minimo, ['class' => 'form-control', 'required' ]) !!}

    {!! Form::label ('fk_categoria', 'Categoria do Produto:') !!}
    {!! Form::select('fk_categoria',
    App\Models\Categoria::orderbY('nome')->pluck('nome', 'id_categorias')->toArray(),
    $produtos->fk_categoria, ['class' => 'form-control', 'required' ]) !!}

    {!! Form::label ('imagem', 'Imagem do Produto:') !!}
    {!! Form::text ('imagem',
    $produtos->imagem, ['class' => 'form-control', 'required']) !!}

    {!! Form::label ('imagem', ' Nova Imagem do Produto:') !!}
    {!! Form::file ('imagem', null, ['class' => 'form-control-file']) !!}
    

    <div class="form-group">
        {!! Form::submit('Editar Produtos', ['class'=>'btn btn-primary']) !!}
        {!! Form::reset('Limpar', ['class'=>'btn btn-default']) !!}

    </div>


    {!! Form::close() !!}

    @stop
    {{-- @section('js')
<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

<script>
    $(document).ready(function() {
        $('#money').mask('#.##0,00', {reverse: true});
    });
</script>
@endsection --}}