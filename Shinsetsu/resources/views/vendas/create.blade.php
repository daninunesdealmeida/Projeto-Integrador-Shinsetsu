@extends('adminlte::page')

@section('content')
<h3>Nova Venda</h3>
{!! Form::open(['route'=>'vendas.store']) !!}

<div class="form-group">

    {!! Form::label ('dt_venda', 'Data da Venda:') !!}
    {!! Form::date ('dt_venda', null, ['class' => 'form-control']) !!}

    {!! Form::label ('total_itens', 'Total de itens:') !!}
    {!! Form::text ('total_itens', null, ['class' => 'form-control']) !!}

    {!! Form::label ('valor_vendas', 'Valor da Venda:') !!}
    {!! Form::text ('valor_vendas', null, ['class' => 'form-control']) !!}

    {!! Form::label ('fk_users', 'Usuario:') !!}
    {!! Form::select('fk_users',
    \app\Models\Usuario::orderbY('name')->pluck('name', 'id')->toArray(),
    null, ['class' => 'form-control', 'required' ]) !!}

    <h4>Produtos</h4>

        <div class="input_fields_wrap"></div>

        <br>

        <button style="float:right" class="add_field_button btn btn-default">Adiciona Produto</button>

        <br>
        <hr />
  

</div>

<div class="form-group">
    {!! Form::submit('Criar Venda', ['class'=>'btn btn-primary']) !!}
    {!! Form::reset('Limpar', ['class'=>'btn btn-default']) !!}

</div>

{!! Form::close() !!}
@stop

@section('js')
	<script>
		$(document).ready(function(){
			var wrapper = $(".input_fields_wrap");
			var add_button = $(".add_field_button");
			var x=0;
			$(add_button).click(function(e){
			x++;
			var newField = '<div><div style="width:94%; float:left" id="produto">{!! Form::select("produtos[]",
                    \App\Models\Produto::orderBy("nome")->pluck("nome","id_produtos")->toArray(),
                    null, ["class"=>"form-control", "required", "placeholder"=>"Selecione um produto"]) !!}</div><button type="button" class="remove_field btn btn-danger btn-circle"><i class="fa fa-times"></button></div>';
			$(wrapper).append(newField);
		});
		$(wrapper).on("click",".remove_field", function(e){
			e.preventDefault();
			$(this).parent('div').remove();
			x--;
		});
		})
	</script>

@stop