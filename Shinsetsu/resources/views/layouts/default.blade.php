@extends('adminlte::page')

@section('plugins.Sweetalert2', true)

@section('js')
<script>
    function ConfirmaExclusao(id_agendamentos, id_categorias, id_pagamentos, id_pessoas, id_produtos, id_usuarios, id_vendas, id_vendaItens, id_usuarios) {

        swal.fire({
                title: 'Confirma a Exclusão?',
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
                        $.get('/' + @yield('table-delete') + '/' + id_categorias + '/destroy',
                            function(data) {
                                if (data.status == 200) {
                                    swal.fire(
                                        'Deletado!',
                                        'Exclusão confirmada.',
                                        'success'
                                    ).then(function() {
                                        window.location.reload();
                                    });
                                } else
                                    swal.fire(
                                        'Erro!',
                                        'Ocorreram erro nas exclusões. Entre em contato com o Suporte.'
                                    );
                            });
                    }
                    if (isConfirm.value && id_agendamentos) {
                        $.get('/' + @yield('table-delete') + '/' + id_agendamentos + '/destroy',
                            function(data) {
                                if (data.status == 200) {
                                    swal.fire(
                                        'Deletado!',
                                        'Exclusão confirmada.',
                                        'success'
                                    ).then(function() {
                                        window.location.reload();
                                    });
                                } else
                                    swal.fire(
                                        'Erro!',
                                        'Ocorreram erro nas exclusões. Entre em contato com o Suporte.'
                                    );
                            });
                    }
                    if (isConfirm.value && id_pagamentos) {
                        $.get('/' + @yield('table-delete') + '/' + id_pagamentos + '/destroy',
                            function(data) {
                                if (data.status == 200) {
                                    swal.fire(
                                        'Deletado!',
                                        'Exclusão confirmada.',
                                        'success'
                                    ).then(function() {
                                        window.location.reload();
                                    });
                                } else
                                    swal.fire(
                                        'Erro!',
                                        'Ocorreram erro nas exclusões. Entre em contato com o Suporte.'
                                    );
                            });
                    }
                    if (isConfirm.value && id_pessoas) {
                        $.get('/' + @yield('table-delete') + '/' + id_pessoas + '/destroy',
                            function(data) {
                                if (data.status == 200) {
                                    swal.fire(
                                        'Deletado!',
                                        'Exclusão confirmada.',
                                        'success'
                                    ).then(function() {
                                        window.location.reload();
                                    });
                                } else
                                    swal.fire(
                                        'Erro!',
                                        'Ocorreram erro nas exclusões. Entre em contato com o Suporte.'
                                    );
                            });
                    }
                    if (isConfirm.value && id_produtos) {
                        $.get('/' + @yield('table-delete') + '/' + id_produtos + '/destroy',
                            function(data) {
                                if (data.status == 200) {
                                    swal.fire(
                                        'Deletado!',
                                        'Exclusão confirmada.',
                                        'success'
                                    ).then(function() {
                                        window.location.reload();
                                    });
                                } else
                                    swal.fire(
                                        'Erro!',
                                        'Ocorreram erro nas exclusões. Entre em contato com o Suporte.'
                                    );
                            });
                    }
                    if (isConfirm.value && id_usuarios) {
                        $.get('/' + @yield('table-delete') + '/' + id_usuarios + '/destroy',
                            function(data) {
                                if (data.status == 200) {
                                    swal.fire(
                                        'Deletado!',
                                        'Exclusão confirmada.',
                                        'success'
                                    ).then(function() {
                                        window.location.reload();
                                    });
                                } else
                                    swal.fire(
                                        'Erro!',
                                        'Ocorreram erro nas exclusões. Entre em contato com o Suporte.'
                                    );
                            });
                    }
                    if (isConfirm.value && id_vendas) {
                        $.get('/' + @yield('table-delete') + '/' + id_vendas + '/destroy',
                            function(data) {
                                if (data.status == 200) {
                                    swal.fire(
                                        'Deletado!',
                                        'Exclusão confirmada.',
                                        'success'
                                    ).then(function() {
                                        window.location.reload();
                                    });
                                } else
                                    swal.fire(
                                        'Erro!',
                                        'Ocorreram erro nas exclusões. Entre em contato com o Suporte.'
                                    );
                            });
                    }
                    if (isConfirm.value && id_vendaItens) {
                        $.get('/' + @yield('table-delete') + '/' + id_vendaItens + '/destroy',
                            function(data) {
                                if (data.status == 200) {
                                    swal.fire(
                                        'Deletado!',
                                        'Exclusão confirmada.',
                                        'success'
                                    ).then(function() {
                                        window.location.reload();
                                    });
                                } else
                                    swal.fire(
                                        'Erro!',
                                        'Ocorreram erro nas exclusões. Entre em contato com o Suporte.'
                                    );
                            });

                    }
                    if (isConfirm.value && id) {
                        $.get('/' + @yield('table-delete') + '/' + id_usuarios + '/destroy',
                            function(data) {
                                if (data.status == 200) {
                                    swal.fire(
                                        'Deletado!',
                                        'Exclusão confirmada.',
                                        'success'
                                    ).then(function() {
                                        window.location.reload();
                                    });
                                } else
                                    swal.fire(
                                        'Erro!',
                                        'Ocorreram erro nas exclusões. Entre em contato com o Suporte.'
                                    );
                            }
                        );
                    }
                }
            );

    }
</script>
@stop