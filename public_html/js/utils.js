/*!
 * renandiett/utils.js 1.0.4
 * https://gist.github.com/renandiett/be058ba559cba22b207a64c1113ff1bf
 */

// Remove um elemento de um array pelo seu valor
Array.prototype.remove = function () {
    var what, a = arguments, L = a.length, ax;
    while (L && this.length) {
        what = a[--L];
        while ((ax = this.indexOf(what)) !== -1) {
            this.splice(ax, 1);
        }
    }
    return this;
};

// Seleciona o valor de um <select> pelo texto de um de seus <option>
function selectBoxByText(str, dd) {
    var textToFind = str;

    for (var i = 0; i < dd.options.length; i++) {
        if (dd.options[i].text === textToFind) {
            dd.selectedIndex = i;
            break;
        }
    }
}

// Popup de confirmação ao tentar deletar um registro
// Necessita do plugin http://bootboxjs.com/
function deleteForm(form) {
    bootbox.confirm("Deseja deletar este registro?", function (result) {
        if (result) form.submit();
    });
}

// Passa dados de inputs <hidden> da row de uma tabela
function editFormFromTable(row, form) {
    var inputs = row.find('td').not(':last').find('input[type="hidden"]');
    var data = [];
    $(form).fadeOut(200, function () {

        for (var i = 0; i < inputs.length; i++) {
            var name = inputs[i].name;
            var value = inputs[i].value;
            $(form).find('[name="' + name + '"]').val(value).trigger('change');
        }
        
    }).fadeIn(200);    
}

// <tr data-form="#form-editable"> quando clicado, mostrar dados em um formulário
$('[data-form]').on('click', function (e) {
    var row = $(this);
    var form = $(this).data('form');
    editFormFromTable(row, form);
});

// Visualiza várias imagens via <input type="file" />
function readImages(input, callback) {

    if (input.files && input.files[0]) {
        for (var i = 0; i < input.files.length; i++) {

            var reader = new FileReader();

            reader.onload = function (e) {
                callback(e.target.result);
            }

            reader.readAsDataURL(input.files[i]);
        }
    }
}

// Visualiza uma imagem via <input type="file" />
function readImage(input, callback) {

    readImages(input, callback);
}

// Mostra uma imagem que foi carregada
$('input[type="file"][data-image]').on('change', function (e) {
    readImage(this, function (result) {
        $($(e.target).data('image')).attr('src', result);
    });
});

// Mostra várias imagens na tela que foram carregadas de um <input file multiple/>
$('input[type="file"][data-images][multiple]').on('change', function (e) {
    readImages(this, function (result) {
        var img = document.createElement('img');
        img.src = result;
        img.alt = '';
        img.className = 'img-responsive';
        $($(e.target).data('images')).append(img);
    });
});

// Mostra imagem carregada do <input file/> como background de um elemento
$('input[type="file"][data-background]').on('change', function (e) {
    readImage(this, function (result) {
        $($(e.target).data('background')).css('background-image', 'url("' + result + '")');
    });
});

// Limpa erros de validação quando uma tecla deixa de ser pressionada
$('.has-error input, .has-error select, .has-error textarea').on('input change', function () {
    $(this).closest('.has-error').removeClass('has-error').find('.help-block').remove();
});

// Resolve o bug do input datetime-local
$.each($('input[type="datetime-local"]'), function (index, element) {
    $(element).val($(element).attr('value').replace(' ', 'T'));
});

