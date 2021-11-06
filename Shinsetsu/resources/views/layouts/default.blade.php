@extends('adminlte::page')

@section('plugins.Sweetalert2', true)

@section('js')
<script>
    function ConfirmaExclusao(id_agendamentos, id_categorias, id_pagamentos, id_pessoas, id_produtos, id_usuarios, id_vendas, venda_itens) {


        swal.fire({
            title: 'Confirma a exclusão?',
            text: "Está ação não poderá ser revertida!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Sim, excluir!',
            cancelButtonText: 'Cancelar!',
            closeOnConfirm: false,
        }).then(function(isConfirm) {
            if (isConfirm.value && id_categorias) {
                $.get('/' + @yield('table-delete') +'/'+id_categorias +'/destroy',
                    function(data) {
                        swal.fire(
                            'Deletado!',
                            'Exclusão confirmada.',
                            'success'
                        ).then(function() {
                            window.location.reload();
                        });
                    });
            }
            if (isConfirm.value && id_agendamentos) {
                $.get('/' + @yield('table-delete') +'/'+id_agendamentos +'/destroy',
                    function(data) {
                        swal.fire(
                            'Deletado!',
                            'Exclusão confirmada.',
                            'success'
                        ).then(function() {
                            window.location.reload();
                        });
                    });

            }
            if (isConfirm.value && id_pagamentos) {
                $.get('/' + @yield('table-delete') +'/'+id_pagamentos +'/destroy',
                    function(data) {
                        swal.fire(
                            'Deletado!',
                            'Exclusão confirmada.',
                            'success'
                        ).then(function() {
                            window.location.reload();
                        });
                    });

            }
            if (isConfirm.value && id_pessoas) {
                $.get('/' + @yield('table-delete') +'/'+id_pessoas +'/destroy',
                    function(data) {
                        swal.fire(
                            'Deletado!',
                            'Exclusão confirmada.',
                            'success'
                        ).then(function() {
                            window.location.reload();
                        });
                    });

            }
            if (isConfirm.value && id_produtos) {
                $.get('/' + @yield('table-delete') +'/'+id_produtos +'/destroy',
                    function(data) {
                        swal.fire(
                            'Deletado!',
                            'Exclusão confirmada.',
                            'success'
                        ).then(function() {
                            window.location.reload();
                        });
                    });

            }
            if (isConfirm.value && id_produtos) {
                $.get('/' + @yield('table-delete') +'/'+id_produtos +'/destroy',
                    function(data) {
                        swal.fire(
                            'Deletado!',
                            'Exclusão confirmada.',
                            'success'
                        ).then(function() {
                            window.location.reload();
                        });
                    });

            }
            if (isConfirm.value && id_usuarios) {
                $.get('/' + @yield('table-delete') +'/'+id_usuarios +'/destroy',
                    function(data) {
                        swal.fire(
                            'Deletado!',
                            'Exclusão confirmada.',
                            'success'
                        ).then(function() {
                            window.location.reload();
                        });
                    });

            }
            if (isConfirm.value && id_vendas) {
                $.get('/' + @yield('table-delete') +'/'+id_vendas +'/destroy',
                    function(data) {
                        swal.fire(
                            'Deletado!',
                            'Exclusão confirmada.',
                            'success'
                        ).then(function() {
                            window.location.reload();
                        });
                    });

            }
            if (isConfirm.value && venda_itens) {
                $.get('/' + @yield('table-delete') +'/'+venda_itens +'/destroy',
                    function(data) {
                        swal.fire(
                            'Deletado!',
                            'Exclusão confirmada.',
                            'success'
                        ).then(function() {
                            window.location.reload();
                        });
                    });

            }

        })
    }
</script>
@stop