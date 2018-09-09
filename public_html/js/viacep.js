$(function () {

    function limpa_formulário_cep() {
        // Limpa valores do formulário de cep.
        $('#logradouro').val('').prop('disabled', false);
        $('#bairro').val('').prop('disabled', false);
        $('#cidade').val('').prop('disabled', false);
        $('#uf_id').prop('disabled', false);
    }

    function limpa_erro(input) {
        $(input).closest('.form-group.has-error').removeClass('has-error').find('.help-block').remove();
    }

    // Quando o campo cep perde o foco.
    $('#cep').keyup(function (e) {

        $this = $(this);

        // Verifica se uma tecla numérica foi pressionada
        if ((e.which >= 48 && e.which <= 57) || (e.which >= 96 && e.which <= 105)) {

            // Nova variável "cep" somente com dígitos.
            var cep = $(this).val().replace(/\D/g, '');

            // Verifica se campo cep possui valor informado.
            if (cep != "") {

                // Expressão regular para validar o CEP.
                var validacep = /^[0-9]{8}$/;

                // Valida o formato do CEP.
                if (validacep.test(cep)) {

                    // Preenche os campos com "..." enquanto consulta webservice.
                    $('#logradouro').val('...').prop('disabled', true);
                    $('#bairro').val('...').prop('disabled', true);
                    $('#cidade').val('...').prop('disabled', true);
                    $('#uf_id').prop('disabled', true);

                    // Consulta o webservice viacep.com.br/
                    $.getJSON("//viacep.com.br/ws/" + cep + "/json/?callback=?", function (dados) {

                        if (!("erro" in dados)) {
                            // Atualiza os campos com os valores da consulta.
                            $('#logradouro').val(dados.logradouro).prop('disabled', false);
                            $('#bairro').val(dados.bairro).prop('disabled', false);
                            $('#cidade').val(dados.localidade).prop('disabled', false);

                            // Seleciona UF
                            selectBoxByText(dados.uf, document.getElementById('uf_id'));
                            $('#uf_id').prop('disabled', false).trigger('change');

                            // Limpa erros e dá foco no campo "numero"
                            limpa_erro('#cep');
                            limpa_erro('#logradouro');
                            limpa_erro('#bairro');
                            limpa_erro('#cidade');
                            $('#numero').focus();

                        } // end if.
                        else {
                            // CEP pesquisado não foi encontrado.
                            limpa_formulário_cep();
                            var span = '<span class="help-block">' +
                                '<strong>Este cep não foi encontrado em nossa base de dados.</strong>' +
                                '</span>';
                            $this.parent().find('.help-block').remove();
                            $this.parent().addClass('has-error').append(span);
                        }
                    });
                } // end if.
                else {
                    // cep é inválido.
                    limpa_formulário_cep();
                }
            } // end if.
            else {
                // cep sem valor, limpa formulário.
                limpa_formulário_cep();
            }
        }
    });
});
