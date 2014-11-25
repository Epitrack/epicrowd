var APP = APP || {};
APP.Language = {
  setUp: function() {
    this.startLanguage();
    this.changeLanguage();
  },

  startLanguage: function() {
    i18n.init({
      fallbackLng: 'en-US' // fallback when language is not defined language
      ,debug: true // debug
      ,fixLng: true // preserve cookie when language is not defined
      ,load: 'current' // define the correct form to describe language
    },

    function(translation) {
      var appName, language;

      $('[data-i18n]').i18n();
        appName = translation('app.name');
        language = navigator.language;

      if (language != 'pt-BR') {
        APP.Language.i18en();
      } else {
        APP.Language.i18pt();
      }
    });
  },

  i18en: function() {
    i18n.setLng('en-US', {fixLng: true}, function(translation){
      $('[data-i18n]').i18n();
    });

    $('#logo-primary').removeClass('js-logo-pt');
    $('#logo-primary').addClass('js-logo-en');
  },

  i18pt: function() {
    i18n.setLng('pt-BR', {fixLng: true}, function(translation){
      $('[data-i18n]').i18n();
    });

    $('#logo-primary').removeClass('js-logo-en');
    $('#logo-primary').addClass('js-logo-pt');
  },

  activeClass:function(element) {
    $('#switch-language button').removeClass('js-active');
    $(element).addClass('js-active');
  },

  changeLanguage: function() {
    var attr, element;

    $('#switch-language').on('click', 'button', function(event) {
      element = this;
      attr = $(this).attr('data-language');

      if (attr == 'en') {
        APP.Language.activeClass(element);
        APP.Language.i18en();
      } else if (attr == 'pt') {
        APP.Language.activeClass(element);
        APP.Language.i18pt();
      }
    });
  }
}
