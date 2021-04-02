$(document).ready(function(){
  $("#title").focus();
  $("#zipcode").mask("99999-999");
  $('#phone').focusin(function(){ 
    $('#phone').mask('(99) 99999999?9'); 
  });
  $('#phone').focusout(function(){
    var phone, element;
    element = $(this);
    element.unmask();
    phone = element.val().replace(/\D/g, '');
    if(phone.length > 10) {
      element.mask('(99)99999-999?9');
    }else {
       element.mask('(99)9999-9999?9');
     }
  }).trigger('focusout');
  
});

// Inicia o validador ao carregar a página
$(function() {

  // valida o formulário
  $('#frm_search').validate({

    submitHandler: function(form) {
      xajax_validaLogin(xajax.getFormValues('frm_search'));
      return false;
    },

    // define regras para os campos
    rules: {
      title: {
        required: true
      }
    },
    // define messages para cada campo

    messages: {
      title: '<div class="errortxt"><img class="errorimg" src="../img/error.png" alt="" /></div>'
    }
  });
});

function buscaCEP(cep){ alert('');
  var cep = cep.replace(/\D/g, '');
  if (cep != "") {
      document.getElementById('id_aguarde').innerHTML = 'Aguarde...';
      var validacep = /^[0-9]{8}$/;

      //Valida o formato do CEP.
      if(validacep.test(cep)) {
          //Consulta o webservice viacep.com.br/
          $.getJSON("https://viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {
              if (!("erro" in dados)) {
                  document.getElementById('id_aguarde').innerHTML = '';
                  if(dados.logradouro != ''){
                    $("#address").val(dados.logradouro);
                  }else{
                    document.getElementById('id_aguarde').innerHTML = 'Endereço não encontrado!';
                  }
                  $("#city").val(dados.localidade);
                  $("#state").val(dados.uf);
              }
           else{
                document.getElementById('id_aguarde').innerHTML = 'CEP não encontrado.';
              }
          });
      }
      else {
        document.getElementById('id_aguarde').innerHTML = 'Formato de CEP inválido.';
      }
  }
}
