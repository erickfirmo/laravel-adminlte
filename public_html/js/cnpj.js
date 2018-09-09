$(function () {

    var request;
    var timeout;

    var campos = [
        'razao_social',
        'nome_fantasia',
        'cep',
        'logradouro',
        'numero',
        'complemento',
        'bairro',
        'cidade',
        'telefone',
    ];

    function popula_campo(element_id, val) {
        $('#' + element_id).val(val);
    }

    function set_disabled(element_id, disabled) {
        $('#' + element_id).prop('disabled', disabled);
    }

    function desabilita_campos() {
        for (var i = 0; i < campos.length; i++) {
            set_disabled(campos[i], true);
        }
    }

    function habilita_campos() {
        for (var i = 0; i < campos.length; i++) {
            set_disabled(campos[i], false);
        }
    }

    function set_label(element, message, type = null) {
        var span = '<span class="help-block">' +
            '<strong>' + message + '</strong>' +
            '</span>';

        element.parent().find('.help-block').remove();
        element.parent().addClass(type).append(span);
    }

    function set_error(element, message) {
        set_label(element, message, 'has-error');
    }

    function limpa_erro(input) {
        $(input).closest('.form-group').removeClass('has-error').find('.help-block').remove();
    }

    function limpa_erros() {
        for (var i = 0; i < campos.length; i++) {
            limpa_erro('#' + campos[i]);
        }
    }

    function desativa_formulario_cnpj() {
        // Desativa campos do formulário de cnpj.
        $('#uf_id').prop('disabled', true);
        desabilita_campos();
        // popula_campos('...', true);
    }

    function limpa_formulário_cnpj() {
        // Limpa valores do formulário de cnpj.
        $('#uf_id').prop('disabled', false);
        habilita_campos();
    }

    // Quando o campo cnpj perde o foco.
    $('#cnpj').keyup(function (e) {

        $this = $(this);

        // Verifica se uma tecla numérica foi pressionada
        if ((e.which >= 48 && e.which <= 57) || (e.which >= 96 && e.which <= 105)) {

            // Nova variável "cnpj" somente com dígitos.
            var cnpj = $(this).val().replace(/\D/g, '');

            // Verifica se campo cnpj possui valor informado.
            if (cnpj != "") {

                // Expressão regular para validar o cnpj.
                var validacnpj = /^[0-9]{14}$/;

                // Valida o formato do cnpj.
                if (validacnpj.test(cnpj)) {

                    // Desabilita os campos
                    limpa_erros();
                    limpa_erro($this);



                    // Cancela a última requisição
                    if (request) {
                        request.abort();
                    }

                    // Cancela o últime timeout
                    if (timeout) {
                        clearTimeout(timeout);
                    }

                    // Adiciona um timeout para a próxima requisição
                    timeout = setTimeout(function () {
                        limpa_formulário_cnpj();
                        set_error($this, 'Não foi possível buscar por este CNPJ. Por favor, tente novamente.');
                        $this.focus();
                    }, 5000);

                    // Consulta o webservice receitaws.com.br/
                    request = $.getJSON("//receitaws.com.br/v1/cnpj/" + cnpj + "/?callback=?", function (dados) {

                        clearTimeout(timeout);

                        if (dados.status == 'OK') {
                            // Atualiza os campos com os valores da consulta.
                            for (var i = 0; i < campos.length; i++) {
                                switch (campos[i]) {
                                    case "razao_social":
                                        popula_campo(campos[i], dados.nome);
                                        break;
                                    case "nome_fantasia":
                                        popula_campo(campos[i], dados.fantasia);
                                        break;
                                    case "cidade":
                                        popula_campo(campos[i], dados.municipio);
                                        break;
                                    default:
                                        popula_campo(campos[i], dados[campos[i]]);
                                }
                            }

                            // Seleciona UF
                            selectBoxByText(dados.uf, document.getElementById('uf_id'));
                            $('#uf_id').prop('disabled', false).trigger('change');

                            
                            // Limpa erros (se houver)
                            limpa_erros();
                            limpa_erro($this);
                            habilita_campos();

                        } // end if.
                        else {
                            // cnpj pesquisado não foi encontrado.
                            limpa_formulário_cnpj();
                            set_error($this, 'Este CNPJ não foi encontrado em nossa base de dados.');
                            $this.focus();
                        }
                    });
                } // end if.
                else {
                    // cnpj é inválido.
                    limpa_formulário_cnpj();
                }
            } // end if.
            else {
                // cnpj sem valor, limpa formulário.
                limpa_formulário_cnpj();
            }
        }
    });
});
