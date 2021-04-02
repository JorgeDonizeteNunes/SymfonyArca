$(document).ready(function(){
  $("#usuario").focus();
});

// Inicia o validador ao carregar a página
$(function() {

  // valida o formulário
  $('#frm_login').validate({

    submitHandler: function(form) {
      xajax_validaLogin(xajax.getFormValues('frm_login'));
      return false;
    },

    // define regras para os campos
    rules: {
      usuario: {
        required: true
      },
      senha: {
        required: true
      }
    },
    // define messages para cada campo

    messages: {
      usuario: '<div class="errortxt"><img class="errorimg" src="../img/error.png" alt="" /></div>',
      senha:   '<div class="errortxt"><img class="errorimg" src="../img/error.png" alt="" /></div>'
    }
  });
});
