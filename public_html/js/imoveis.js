

$(document).ready(function(){
    var opcao = $('#tipo_de_imovel_id option:selected').text();

    if(opcao == 'Conjunto Comercial' || opcao == 'Apartamento')
    {        
        $('#edificios').show();
        $('#edificio_id').select2();

 

    }else{
        $("#edificios").hide(); 
    }
   
 });



//MONTA A LISTA COM OS EDIFICIOS NA CRIÇÃO DE IMOVEL CUJO TIPO SEJA APARTAMENTO OU CONJUNTO RESIDENCIAL

$('#tipo_de_imovel_id').change(function () {

    var opcao = $('#tipo_de_imovel_id option:selected').text();

    if(opcao == 'Conjunto Comercial' || opcao == 'Apartamento')
    {        
        $('#edificios').show();
        $('#edificio_id').select2();

 

    }else{
        $("#edificios").hide(); 
    }
   
   
  });




$("#edificio_id").select2().on("select2:select", function (e) {


    var dominio = pegaDominio();   
    var selected_element = $(e.currentTarget);
    var edificio_id = selected_element.val();

  $.get("./../../../../../admin/cadastro/imoveis/edificios/" + edificio_id, function(data){


    $('#cep').val(data[1].cep); 
    $('#logradouro').val(data[1].logradouro); 
    $('#numero').val(data[1].numero); 
    $('#bairro').val(data[1].bairro); 
    $('#complemento').val(data[1].complemento); 
    $('#cidade').val(data[1].cidade); 
    $('#uf_id').val(data[1].uf_id); 

    $('li[id^="li-fotos-edificio"]').html("");
    $('li[id^="li-fotos-edificio"]').append('<a href="#5" data-toggle="tab">Fotos do Edificio</a>');

    $('.listadefotosEdificio').html("");
    $.each(data[2], function(index, fotoEdificio){
       
        $('.listadefotosEdificio').append("<div class='col-md-3'><a class='thumbnail'><img class='img img-responsive' src='"+ dominio + fotoEdificio.thumbnail +"'></a></div>");
   });


});

});



