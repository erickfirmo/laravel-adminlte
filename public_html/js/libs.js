$(function () {
    // FastClick
    FastClick.attach(document.body);
    
    // Stellar
    // Utilize o atributo data-stellar-background-ratio="0.5" no elemento que desejar o efeito parallax
    $.stellar({
        horizontalScrolling: false,
        verticalOffset: 40
    });

    // Select2
    $("select").select2();

    // iCheck
    $('input').iCheck({
        checkboxClass: 'icheckbox_square-blue',
        radioClass: 'iradio_square-blue',
        increaseArea: '20%' // optional
    });

    // jQuery Mask Plugin
    var SPMaskBehavior = function (val) {
        return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
    }, spOptions = {
        onKeyPress: function (val, e, field, options) {
            field.mask(SPMaskBehavior.apply({}, arguments), options);
        }
    };

    $('#celular').mask(SPMaskBehavior, spOptions);
    $('#telefone').mask('(00) 0000-0000');
    $('#cep').mask('00000-000');
    $('#cpf').mask('000.000.000-00');
    $('#cnpj').mask('00.000.000/0000-00');
    $('input.percent').mask('##0%', { reverse: true });
    $('input.money').mask("#.##0,00", { reverse: true });
});
