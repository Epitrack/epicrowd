var APP = APP || {};
APP.Register = {
  setUp: function() {
    this.sendRegister();
  },

  sendRegister: function() {
    var name, email, organization, country, security_code, language;

    $('#form-register').submit(function(event) {
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
        if (enviar.status != false) { // send ok
          $('#feedback').removeClass();
          $('#feedback').addClass('alert alert-success');
          $('#feedback').html(enviar.message);
          $('#form-register')[0].reset();
        } else if (enviar.status == false) { // send error
          $('#feedback').removeClass();
          $('#feedback').addClass('alert alert-danger');
          $('#feedback').html(enviar.message);
        }
      });
    });
  }
}
