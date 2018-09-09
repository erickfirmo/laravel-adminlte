<!-- jQuery 3 -->
<script src="{{ asset('vendor/adminlte/bower_components/jquery/dist/jquery.min.js') }}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{ asset('vendor/adminlte/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<!-- FastClick -->
<script src="{{ asset('vendor/adminlte/bower_components/fastclick/lib/fastclick.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('vendor/adminlte/dist/js/adminlte.min.js') }}"></script>
<!-- Sparkline -->
<script src="{{ asset('vendor/adminlte/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js') }}"></script>
<!-- jvectormap  -->
<script src="{{ asset('vendor/adminlte/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
<script src="{{ asset('vendor/adminlte/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
<!-- SlimScroll -->
<script src="{{ asset('vendor/adminlte/bower_components/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
<!-- ChartJS -->
<script src="{{ asset('vendor/adminlte/bower_components/Chart.js/Chart.js') }}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('vendor/adminlte/dist/js/pages/dashboard2.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('vendor/adminlte/dist/js/demo.js') }}"></script>
<!-- Sweet Alert -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>

<script type="text/javascript" src="https://cdn.datatables.net/v/bs/jqc-1.12.3/jszip-2.5.0/dt-1.10.16/af-2.2.2/b-1.4.2/b-colvis-1.4.2/b-flash-1.4.2/b-html5-1.4.2/b-print-1.4.2/cr-1.4.1/kt-2.3.2/r-2.2.0/sc-1.4.3/sl-1.2.3/datatables.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.13/jquery.mask.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>

<script src="{{ asset('js/viacep.js') }}"></script>
<script src="{{ asset('js/cnpj.js') }}"></script>
<script src="{{ asset('js/util.js') }}"></script>
<script src="{{ asset('js/imoveis.js') }}"></script>
<script type="text/javascript">

window.onload = function() {
  $('.date').mask('00/00/0000');
  $('.time').mask('00:00:00');
  $('.date_time').mask('00/00/0000 00:00:00');
  $('.cep').mask('00000-000');
  $('.phone').mask('0000-0000');
  $('.phone_with_ddd').mask('(00) 0000-0000');
  $('.cellphone_with_ddd').mask('(00) 00000-0000');
  $('.phone_us').mask('(000) 000-0000');
  $('.mixed').mask('AAA 000-S0S');
  $('.cpf').mask('000.000.000-00', {reverse: true});
  $('.cnpj').mask('00.000.000/0000-00', {reverse: true});
  $('.money').mask('000.000.000.000.000,00', {reverse: true});
  $('.money2').mask("#.##0,00", {reverse: true});
  $('.ip_address').mask('0ZZ.0ZZ.0ZZ.0ZZ', {
    translation: {
      'Z': {
        pattern: /[0-9]/, optional: true
      }
    }
  });
  $('.ip_address').mask('099.099.099.099');
  $('.percent').mask('##0,00%', {reverse: true});
  $('.meter').mask('##0.00', {reverse: true});
  $('.clear-if-not-match').mask("00/00/0000", {clearIfNotMatch: true});
  $('.placeholder').mask("00/00/0000", {placeholder: "__/__/____"});
  $('.fallback').mask("00r00r0000", {
      translation: {
        'r': {
          pattern: /[\/]/,
          fallback: '/'
        },
        placeholder: "__/__/____"
      }
    });
  $('.selectonfocus').mask("00/00/0000", {selectOnFocus: true});
}

</script>



<script>

function deleteForm(e)
{

    swal({
        title: "Tem Certeza?",
        text: "Você não poderá recuperar esse registro no futuro!",
        type: "warning",
        showCancelButton: true,
        confirmButtonClass: 'btn-danger',
        confirmButtonText: 'Sim, apagar!',
        cancelButtonText: "Não, quero voltar!",
        closeOnConfirm: false,
        closeOnCancel: false
      },
      function (isConfirm) {
        if (isConfirm) {
          e.submit();
        } else {
          swal("Cancelado", "O registro não foi modificado  :)", "error");
          return false;
        }
      });  
};
</script>


<script>

    $(document).ready(function () {

        $('#tabela').dataTable({
            dom: 'Bfrtip',
            buttons: [
                {extend: 'print', text: 'Imprimir'},
                {extend: 'copyHtml5', text: 'Copiar'},
                {extend: 'excelHtml5', text: 'Excel'},
                {extend: 'csvHtml5', text: 'CSV'},
                {extend: 'pdfHtml5', text: 'PDF'},
            ],
            "oLanguage": {
                "sProcessing": "Aguarde enquanto os dados são carregados ...",
                "sLengthMenu": "Mostrar _MENU_ registros por pagina",
                "sZeroRecords": "Nenhum registro correspondente ao criterio encontrado",
                "sInfoEmpty": "Exibindo 0 a 0 de 0 registros",
                "sInfo": "Exibindo de _START_ a _END_ de _TOTAL_ registros",
                "sInfoFiltered": "",
                "sSearch": "Procurar",
                "oPaginate": {
                    "sFirst": "Primeiro",
                    "sPrevious": "Anterior",
                    "sNext": "Próximo",
                    "sLast": "Último"
                }

            }

        }
        );
    });

    </script>


    <script>
$( "#new_password" ).keyup(function() {
    verificaTamanho();
  });

  $( "#confirm_password" ).keyup(function() {
    verificanovaSenha();
  });


  $( "#current_password" ).keyup(function() {
    matchPassword();
  });



  function verificaTamanho()
  {
    var new_password = $( "#new_password" ).val();
    if(new_password.length < 6)
    {
      var color = 'red';
      $('#response_password_tamanho').css("color", color).text('A nova senha é muito curta');
    }else{
      var color = 'green';
      $('#response_password_tamanho').css("color", color).text('Nova senha Ok');
    }

  }


  function verificanovaSenha()
  {
    
    var new_password = $( "#new_password" ).val();
    var confirm_password = $( "#confirm_password" ).val();
    
    if(new_password != confirm_password)
    {
      var color = 'red';
      $('#response_password_verifica').css("color", color).text('A confirmação não confere com o campo nova senha');
    }else{
      var color = 'green';
      $('#response_password_verifica').css("color", color).text('Confirmação da nova senha Ok');
    }

  }



  function matchPassword()
  {
   
    var password = $( "#current_password" ).val();
    var token = $('meta[name="csrf-token"]').attr('content');

    $.ajax({
      method: 'PUT', // Type of response and matches what we said in the route
      url: '{{ route("admin.matchpassword", 'password') }}', // This is the url we gave in the route
      dataType:'JSON',
      data: {
        '_method': 'PUT',
        '_token': token,
        'password': password,
        }, // a JSON object to send back
      success: function(response){ // What to do if we succeed
        if(response == true)
        {
          var color = 'green';
          $('#response_password_match').css("color", color).text('A senha atual confere');
        }else{
          var color = 'red';
          $('#response_password_match').css("color", color).text('A senha atual não confere');
        }
          
      },
      error: function(jqXHR, textStatus, errorThrown) { // What to do if we fail
        
      }
      
      });
        
      }

    </script>
    
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.min.js"></script>


<script src="{{ asset('js/fotos.js') }}"></script>
<script src="{{ asset('js/contatos.js') }}"></script>
