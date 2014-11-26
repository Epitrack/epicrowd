var APP = APP || {};
APP.Register = {
  setUp: function() {
    this.sendRegister();
  },

  sendRegister: function() {
    var name, email, organization, country, security_code;

    $('#form-register').submit(function() {
      name = $('#inputName').val();
      email = $('#inputEmail').val();
      organization = $('#inputOrganization').val();
      country = i18n.t("countries.country"+$('#inputCountry').val());
      security_code = $('#inputCaptcha').val();

      $('#feedback').fadeIn();
      $('#feedback').html('Enviando...');
      $.post('envio_contato.php', {
        name: name,
        email: email,
        organization: organization,
        country: country,
        security_code: security_code,
      }, function(enviar) {
        if (enviar != false) {
          $('#feedback').html(enviar);
          $('#form-register')[0].reset();
        } else {
          $('#feedback').addClass('alert-danger');
          $('#feedback').html('Ocorreu um erro, tente novamente em alguns minutos.');
        }
      });
    });
  }
}
