@extends('adminlte::page')

@section('content')
<h3>Novo Pagamento</h3>
{!! Form::open(['route'=>'pagamentos.store']) !!}

<div class="form-group">

   
    {!! Form::label ('telefone', 'Número do telefone:') !!}
    {!! Form::text ('telefone', null, ['class' => 'form-control', 'id'=>'fone']) !!}


    {!! Form::label ('fk_vendas', 'Venda:') !!}
    {!! Form::select('fk_vendas',
    \app\Models\Venda::orderbY('id_vendas')->pluck('id_vendas', 'id_vendas')->toArray(),
    null, ['class' => 'form-control', 'required' ]) !!}

    {!! Form::label ('fk_users', 'Usuario:') !!}
    {!! Form::select('fk_users',
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
    $(document).ready(function() {
        $('#fone').mask('(00)000000000');
    });
</script> 

@endsection