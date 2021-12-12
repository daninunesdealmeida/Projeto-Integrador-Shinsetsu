@extends('adminlte::page')

@section('content')
<h3>Nova Venda Item</h3>
{!! Form::open(['route'=>'venda_Itens.store']) !!}

<div class="form-group">

    {!! Form::label ('quantidade', 'quantidade:') !!}
    {!! Form::text ('quantidade', null, ['class' => 'form-control']) !!}

    {!! Form::label ('vlr_unitario', 'Valor unitário:') !!}
    {!! Form::text ('vlr_unitario', null, ['class' => 'form-control', 'id' => 'money']) !!}

    {!! Form::label ('fk_produtos', 'Produto:') !!}
    {!! Form::select('fk_produtos',
    app\Models\Produto::orderbY('nome')->pluck('nome', 'id_produtos')->toArray(),
    null, ['class' => 'form-control', 'required' ]) !!}

    {!! Form::label ('fk_vendas', 'Venda:') !!}
    {!! Form::select('fk_vendas',
    app\Models\Venda::orderbY('valor_vendas')->pluck('valor_vendas', 'id_vendas')->toArray(),
    null, ['class' => 'form-control', 'required' ]) !!}

</div>


<div class="form-group">
    {!! Form::submit('Criar Venda Ítem', ['class'=>'btn btn-primary']) !!}
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
        $('#money').mask('#.##0,00', {
            reverse: true
        });
    });
</script>
@endsection