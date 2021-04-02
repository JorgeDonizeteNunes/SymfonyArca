$(document).ready(function(){
  $("#search").focus();
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
      search: {
        required: true
      }
    },
    // define messages para cada campo

    messages: {
      search: '<div class="errortxt"><img class="errorimg" src="../img/error.png" alt="" /></div>'
    }
  });
});
