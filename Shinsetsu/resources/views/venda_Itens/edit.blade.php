@extends('adminlte::page')

@section('content')
<h3>Editando Produto: {{$venda_Itens->id_vendaItens}}</h3>

@if($errors->any())
<ul class="alert alert-danger">
    @foreach ($errors -> all as $erro)
    <li>{{ error }}</li>
    @endforeach
</ul>
@endif

{!! Form::open(['route'=>["venda_Itens.update", 'id'=>$venda_Itens->id_vendaItens], 'method'=>'put']) !!}

<div class="form-group">

    {!! Form::label ('quantidade', 'quantidade:') !!}
    {!! Form::text ('quantidade', $venda_Itens->quantidade, ['class' => 'form-control']) !!}

    {!! Form::label ('vlr_unitário', 'vlr_unitário:') !!}
    {!! Form::text ('vlr_unitário', $venda_Itens->vlr_unitário, ['class' => 'form-control', 'id' => 'money']) !!}

    {!! Form::label ('fk_produtos', 'Produto:') !!}
    {!! Form::select('fk_produtos',
    app\Models\Produto::orderbY('nome')->pluck('nome', 'id_produtos')->toArray(),
    $venda_Itens->fk_produtos, ['class' => 'form-control', 'required' ]) !!}    

    {!! Form::label ('fk_vendas', 'Venda:') !!}
    {!! Form::select('fk_vendas',
    app\Models\Venda::orderbY('valor_vendas')->pluck('valor_vendas', 'id_vendas')->toArray(),
    $venda_Itens->fk_vendas, ['class' => 'form-control', 'required' ]) !!} 

    

    <div class="form-group">
        {!! Form::submit('Editar Venda Ítens', ['class'=>'btn btn-primary']) !!}
        {!! Form::reset('Limpar', ['class'=>'btn btn-default']) !!}

    </div>


    {!! Form::close() !!}

    @stop
    @section('js')
<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

<script>
    $(document).ready(function() {
        $('#money').mask('#.##0,00', {reverse: true});
    });
</script>
@endsection