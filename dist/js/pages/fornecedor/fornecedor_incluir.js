$(function () {
    'use strict';

    var tipoDocumento = $("#divTipoDocumento");
    var nomeRazaoSocial = $("#divRazaoSocial");
    var nomeFantasia = $("#divNomeFantasia");
    var inscricaoEstadual = $('#divInscricaoEstadual');

    tipoDocumento.hide();
    nomeRazaoSocial.hide();
    nomeFantasia.hide();
    inscricaoEstadual.hide();

    $(document).on('click', 'input[type=radio]', function () {
        var id = $(this).prop('id');
        mostrarInput(id);
    });

    function mostrarInput(id) {
        switch (id) {
            case 'pf':
                $('#divTipoDocumento label').text('CPF');
                $('#divTipoDocumento label').prop('for', 'cpf');
                $('#divTipoDocumento input').prop('name', 'cpf');
                $('#divTipoDocumento input').mask('000.000.000-00');
                $('#divTipoDocumento label').prop('id', 'cpf');
                tipoDocumento.show();

                $('#divRazaoSocial label').text('Nome');
                $('#divRazaoSocial label').prop('for', 'nome');
                $('#divRazaoSocial input').prop('name', 'nome');
                $('#divRazaoSocial input').prop('id', 'nome');
                nomeRazaoSocial.show();
                nomeFantasia.hide();
                inscricaoEstadual.hide();
                break;

            case 'pj':
                $('#divTipoDocumento label').text('CNPJ');   
                $('#divTipoDocumento input').prop('name', 'cnpj');
                $('#divTipoDocumento input').prop('id', 'cnpj');
                $('#divTipoDocumento input').mask('00.000.000/0000-00');
                tipoDocumento.show();

                $('#divRazaoSocial label').text('Razao Social');
                $('#divRazaoSocial label').prop('for', 'razaoSocial');
                $('#divRazaoSocial input').prop('name', 'razaoSocial');
                $('#divRazaoSocial input').prop('id', 'razaoSocial');
                $('#divNomeFantasia label').text('Nome Fantasia');
                $('#divNomeFantasia label').prop('for', 'nomeFantasia');

                $('#divInscricaoEstadual label').text('Inscricao Estadual');
                $('#divInscricaoEstadual label').prop('for', 'inscricaoEstadual');
                $('#divInscricaoEstadual input').prop('name', 'inscricaoEstadual');
                $('#divInscricaoEstadual input').prop('id', 'inscricaoEstadual');

                inscricaoEstadual.show();
                nomeFantasia.show();
                break;

            default:
                break;
        }

    }






});