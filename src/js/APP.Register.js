var APP = APP || {};
APP.Register = {
  setUp: function() {
    this.sendRegister();
    this.checkInput();
  },

  sendRegister: function() {
    var name, email, organization, country, security_code, language, project_title, project_summary,voucher;
    $('#form-register').submit(function(event) {
      name = $('#inputName').val();
      email = $('#inputEmail').val();
      organization = $('#inputOrganization').val();
      country = $('#inputCountry').val();
      security_code = $('#inputCaptcha').val()
      project_title = $('#title-project').val();
      project_summary = $('#summary-project').val();
      voucher = $('#inputVoucher').val();
      language = i18n.lng();
      $('#feedback').fadeIn();
      $('#feedback').html('Enviando...');
      $.post('sys/updates/action', {
        "data[Update][name]": name,
        "data[Update][email]": email,
        "data[Update][organization]": organization,
        "data[Update][project_title]": project_title,
        "data[Update][country_id]": country,
        "data[Update][project_summary]": project_summary,
        voucher: voucher,
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
  },

  checkInput: function() {
    var that = this;
    $('#form-submit').slideUp();

    $('.submit-project').on('click', function() {
      var value = $(this).attr('value');

      if (value == 'yes') {
        $('#form-submit').slideDown();
        that.countWords();
      } else {
        $('#form-submit').slideUp();
      }
    });
  },

  countWords: function() {
    var that = this;

    $('#summary-project').on('keydown', function(event) {
      if ( $(this).val().split(' ').length >= 150 ) {
        that.checkLanguage();
      } else {
        return;
      }
    });
  },

  checkLanguage: function() {
    var string = document.cookie,
        ptBR = string.indexOf('i18next=pt-BR');

    if (ptBR != -1) {
      $('#feedback').text('Você ultrapassou o limite de 150 caracteres').addClass('alert-danger');
    } else {
      $('#feedback').text('You wrote more than 150 words.').addClass('alert-danger');
    }
  }
}
