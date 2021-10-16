@extends('adminlte::page')

@section('title', 'EasyService - Criar agendamento')

@section('content_header')
    <h1>Cadastro de Agendamento</h1>
@stop

@section('content')
    <div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">Criando Agendamento</h3>
    </div>
    <form action="{{route('agendamentos.store')}}" method="post">
        @csrf
        <div class="box-body">
            @include('errors')

            <div class="row">
                <div class="col-xs-8">
                    <label for="modalidade">Modalidade</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Nome do Agendamento">
                </div>
                <div class="col-xs-8">
                    <label for="dia">Dia</label>
                    <input type="date" class="form-date" id="title" name="title">
                </div>
                <div class="col-xs-8">
                    <label for="hora">Hora</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Nome do Agendamento">
                </div>
                <!-- <div class="col-xs-4">
                    <label for="sigla">Pessoa</label>
                    <select class="form-control" name="id_pessoas">
                        @foreach($pessoas as $pessoa)
                        <option value="{{ $pessoa->id_pessoas}}">{{ $pessoa->nome }}</option>
                        @endforeach
                    </select>
                </div> -->
            </div>
        </div>        
        <div class="box-footer">
            <button type="submit" class="btn btn-success">Cadastrar</button>
        </div>        
    </form>
</div>
@stop

{{--@section('table-delete')--}}
{{--"habitos"--}}
{{--@endsection--}}
