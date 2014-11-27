var APP = APP || {};
APP.Register = {
  setUp: function() {
    this.sendRegister();
  },

  sendRegister: function() {
    var name, email, organization, country, security_code, language;

    $('#form-register').submit(function() {
      name = $('#inputName').val();
      email = $('#inputEmail').val();
      organization = $('#inputOrganization').val();
      country = $('#inputCountry').val();
      security_code = $('#inputCaptcha').val();
      language = i18n.lng();

      $('#feedback').fadeIn();
      $('#feedback').html('Enviando...');
      $.post('sys/updates/action', {
        "data[Update][name]": name,
        "data[Update][email]": email,
        "data[Update][organization]": organization,
        "data[Update][country_id]": country,
        security_code: security_code,
        language: language
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
