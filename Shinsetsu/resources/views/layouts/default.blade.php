@extends('adminlte::page')

@section('plugins.Sweetalert2', true)

@section('js')
<script>
    function ConfirmaExclusao(id){
        swal.fire({
            title: 'Confirma a exclusão?', text: 'Está ação não poderá ser revertida!',
            type: 'warning', showCancelButton: true, confirmButtonColor: '3085d6',
            cancelButtonColor: '#d33', confirmButtonText: 'Sim, excluir!',
            cancelButtonText: 'Cancelar!', closeOnConfirm: false,
        }).then(function(isConfirm){
            if (isConfirm.value){
                $.get('/'+ @yield('table-delete') +'/'+id+'/destroy', function(data){
                    console.log(data);
                    if(data.status == 200){
                        swal.fire(
                        'Deletado!',
                        'Exclusão confirmada.',
                        'success'
                    ).then(function(){
                        window.location.reload();
                    });

                    }else{
                        swal.fire(
                        'Erro!', 'ocorreram erro nas exclusões, entre em contato com o Suporte.');
                        }
                   
                }),
            }
</script>
@stop