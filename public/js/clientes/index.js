// Call the dataTables jQuery plugin
$(document).ready(function() {

    $('.botao-deletar').on('click',function(){
        $('#form-modal-excluir').attr('action', '');
        $('#form-modal-excluir').attr('action', $(this).attr('data-action'));
        $('#modal-excluir').modal('show');
    });
//   $('[data-toggle="tooltip"]').tooltip()
    $('#data-table-produtos').DataTable({
        "info": false,
        "lengthChange": false,
        "bPaginate": false,
        // "searching": false, 
        "oLanguage": {
            "sSearch": "Pesquisar",
            "sEmptyTable": "Não há dados!"
        }
    }); 
});
