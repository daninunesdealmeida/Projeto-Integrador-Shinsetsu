@extends('adminlte::page')

@section('content')
<h3>Novo Pagamento</h3>
{!! Form::open(['route'=>'pagamentos.store']) !!}

<div class="form-group">

    {!! Form::label ('cartao', 'Tipo_cartao:') !!}
    {!! Form::select ('cartao', array('Visa' => 'Visa', 'MasterCard' => 'MasterCard'), 'Jiu Visa', ['class' => 'form-control', 'required' ]) !!}

    {!! Form::label ('nome_cartao', 'Nome_cartao:') !!}
    {!! Form::text ('nome_cartao', null, ['class' => 'form-control']) !!}

    {!! Form::label ('num_cartao', 'Número_cartao:') !!}
    {!! Form::text ('num_cartao', null, ['class' => 'form-control']) !!}

    {!! Form::label ('dt_vencimento', 'Dt_vencimento:') !!}
    {!! Form::date ('dt_vencimento', null, ['class' => 'form-control']) !!}

    {!! Form::label ('fk_vendas', 'Venda:') !!}
    {!! Form::select('fk_vendas',
    \app\Models\Venda::orderbY('documento')->pluck('documento', 'id_vendas')->toArray(),
    null, ['class' => 'form-control', 'required' ]) !!}

    {!! Form::label ('fk_usuarios', 'Usuario:') !!}
    {!! Form::select('fk_usuarios',
    \app\Models\Usuario::orderbY('name')->pluck('name', 'id')->toArray(),
    null, ['class' => 'form-control', 'required' ]) !!}

</div>


<div class="form-group">
    {!! Form::submit('Criar Pagamento', ['class'=>'btn btn-primary']) !!}
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
$(document).ready(function(){
    $('#cartao').mask('0000 0000 0000 0000');
});
</script>

@endsection