@extends('adminlte::page')

@section('content')
<h3>Novo Produto</h3>
{!! Form::open(['route'=>'produtos.store', 'files'=>true,  'enctype'=>'multipart/form-data']) !!}

<div class="form-group">

    {!! Form::label ('nome', 'Nome:') !!}
    {!! Form::text ('nome', null, ['class' => 'form-control']) !!}

    {!! Form::label ('especificacao', 'Especificação:') !!}
    {!! Form::text ('especificacao', null, ['class' => 'form-control']) !!}

    {!! Form::label ('preco', 'Preço:') !!}
    {!! Form::text ('preco', null, ['class' => 'form-control']) !!}

    {!! Form::label ('qt_estoque', 'Quantidade em estoque:') !!}
    {!! Form::text ('qt_estoque', null, ['class' => 'form-control']) !!}

    {!! Form::label ('estoque_minimo', 'Estoque minimo:') !!}
    {!! Form::text ('estoque_minimo', null, ['class' => 'form-control', 'required' ]) !!}

    {!! Form::label ('fk_categoria', 'Categoria do Produto:') !!}
    {!! Form::select('fk_categoria',
    App\Models\Categoria::orderbY('nome')->pluck('nome', 'id_categorias')->toArray(),
    null, ['class' => 'form-control', 'required' ]) !!}

    {!! Form::label ('imagem', 'Imagem do Produto:') !!}
    {!! Form::file ('imagem', null, ['class' => 'form-control-file']) !!}

</div>

<div class="form-group">
    {!! Form::submit('Criar Produto', ['class'=>'btn btn-primary']) !!}
    {!! Form::reset('Limpar', ['class'=>'btn btn-default']) !!}

</div>

{!! Form::close() !!}

@stop

<!--  @section('js')
<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

<script>
    $(document).ready(function() {
        $('#money').mask('#.##0,00', {reverse: true});
    });
</script>
@endsection  -->