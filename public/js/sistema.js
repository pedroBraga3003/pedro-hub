$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip()
    //Tratar busca avancada
    $('.botao-busca-avancada').on('click',function(){
        if($('.div-busca-avancada').css('display') != 'none'){
            // $(this).removeClass('btn-outline-dark');
            // $(this).addClass('btn-dark');
            $('.div-busca-avancada').addClass('hidden');
            $(this).find('i').addClass('fa-search-plus').removeClass('fa-search-minus');
        }else{
            // $(this).addClass('btn-outline-dark');
            // $(this).removeClass('btn-dark');
            $('.div-busca-avancada').removeClass('hidden');
            $(this).find('i').removeClass('fa-search-plus').addClass('fa-search-minus');
        }
    });
    // Modal de botão cancelar padrão 
    // $('.botao-deletar').on('click',function(){
    $('body').delegate('.botao-deletar','click',function(){
        $('#form-modal-excluir').attr('action', '');
        $('#form-modal-excluir').attr('action', $(this).attr('data-action'));
        if($(this).attr('data-titulo') != '' && $(this).attr('data-titulo') != undefined){
            $('#modal-excluir-titulo').html('');
            $('#modal-excluir-titulo').html($(this).attr('data-titulo'));
        }
        if($(this).attr('data-msg') != '' && $(this).attr('data-msg') != undefined){
            $('#div-modal-excluir-msg').html('');
            $('#div-modal-excluir-msg').html($(this).attr('data-msg'));
        }
        $('#modal-excluir').modal('show');
    });
    //DataTable padrão
    $('.data-table-padrao').DataTable({
        "info": false,
        "lengthChange": false,
        "bPaginate": false,
        // "searching": false, 
        "oLanguage": {
            "sSearch": "Pesquisar",
            "sEmptyTable": "Não há dados!"
        }
    }); 
    //Remover Validacao apos sair do input
    $("form :input").change(function() {
        $(this).removeClass('is-invalid');
        if($(this).parent().parent().find('.invalid-feedback-input-group').length > 0 ){
            $(this).parent().parent().find('.invalid-feedback-input-group').remove();
            $(this).parent().parent().find('.btn-outline-danger').removeClass('btn-outline-danger').addClass(' btn-outline-secondary');
        }
    });

});

function gerarCodigo(id){
    var data = new Date().getTime();
    // var cod = (jQuery.randomBetween(1, 99999) * data)+"";
    var cod = (Math.floor(Math.random() * 99999) * data)+"";
    cod = "20"+cod.substr(-10);
    cod += calcEanDv(cod);
    $('#'+id).val(cod);
    $('#'+id).removeClass('is-invalid');
    if($('#'+id).parent().parent().find('.invalid-feedback-input-group').length > 0 ){
        $('#'+id).parent().parent().find('.invalid-feedback-input-group').remove();
        $('#'+id).parent().parent().find('.btn-outline-danger').removeClass('btn-outline-danger').addClass(' btn-outline-secondary');
    }
};

function calcEanDv(value){
    var pares = 0 ;
    var impares = 0;
    var dv = '';
    var cod = value.replace('-','');
     /* verificando se tem todos os digitos, caso nao haja criando-o e fazendo verificacao caso tenha */
    if(cod.length <= 11){
        return false;
    } 
    //Verificar
    for (i=0; i <= 11; i++){
        mod = i%2;
        if( mod == 0 ){
            pares += parseInt(value[i]);
        }else{
            impares += parseInt(value[i]) * 3;
        }
    }
    dv = 10 - ((impares + pares) % 10);
    if (dv > 9){ dv=0; }
    return dv;
}