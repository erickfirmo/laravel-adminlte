
 
 if(!recarregarContatos)
 {
      carregaContatos();
 }


 var recarregarContatos = 1;
 
 function limpaCampos()
 {
    $('#nome').val('');
    $('#contato').val('');
    $('#observacoes').val('');
 }


 function carregaContatos()
 {
    var dominio = pegaDominio();   
    var contatable_id   = $('#contatable_id').val();
    var contatable_type = $('#contatable_type').val().replace('\\', '-');


    $('#tabela').html("");
   
    
    $.get('./../../../../../admin/listadecontatos/' + contatable_id + '/' + contatable_type, function(response,){
      $('#tabela').append("<thead><tr><th>Nome</th><th>Contato</th><th>Observações</th><th>Ação</th></tr></thead><tbody>");


      $.each(response, function(index, contato){
           $('#tabela').append("<tr><td>"+contato.nome+"</td><td>"+contato.contato+"</td><td>"+contato.observacoes+"</td><td><input type='button' name='"+contato.id+"' class='btn btn-danger btn-xs' onClick='excluirContato(this)' id='"+contato.id+"' value='Excluir Contato'> </td></tr>");
      });

      $('#tabela').append("</tbody>");

    
      
});

  limpaCampos();

 }




 function addContato()
 {
  
    var contatable_id = $('#contatable_id').val();
    var contatable_type = $('#contatable_type').val();
    var nome =  $('#nome').val();
    var contato = $('#contato').val();
    var observacoes = $('#observacoes').val();
    var token = $('meta[name="csrf-token"]').attr('content');


    $.ajax({
        headers:
        {
            'X-CSRF-Token': token
        },
        url:  '../../../listadecontatos',
        type: 'post',
        data: {
          _method: 'post',
          contatable_id : contatable_id,
          contatable_type : contatable_type,
          nome : nome,
          contato : contato,
          observacoes : observacoes,
          token : token
        },
        success: function(data){ // What to do if we succeed
           
         carregaContatos()
         
        },
        
        error: function(jqXHR, textStatus, errorThrown) { // What to do if we fail
          console.log(JSON.stringify(jqXHR));
          console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
        }
       });
 
 }


function excluirContato(e)
{

  swal({
    title: "Tem Certeza?",
    text: "Você não poderá recuperar esse registro no futuro!",
    type: "warning",
    showCancelButton: true,
    confirmButtonClass: 'btn-danger',
    confirmButtonText: 'Sim, apagar!',
    cancelButtonText: "Não, quero voltar!",
    closeOnConfirm: true,
    closeOnCancel: false,
  },
  function (isConfirm) {
    if (isConfirm) {
      var contato = e.id;
      var token = $('meta[name="csrf-token"]').attr('content');
      
      $.ajax({
       headers:
       {
           'X-CSRF-Token': token
       },
       url:  '../../../listadecontatos/delete/' + contato,
       type: 'delete',
       data: {
         _method: 'delete',
       },
       success: function(data){ // What to do if we succeed
          
        carregaContatos();
        
       },
       
       error: function(jqXHR, textStatus, errorThrown) { // What to do if we fail
         console.log(JSON.stringify(jqXHR));
         console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
       }
      });

    } else {
      swal("Cancelado", "O registro não foi modificado  :)", "error");
      return false;
    }
  }); 




}
 

