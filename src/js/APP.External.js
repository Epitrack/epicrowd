var APP = APP || {};
APP.External = {
  setUp: function() {
    this.getClick();
  },

  getClick: function() {
    var href;

    $('.external').on('click', function(event) {
      event.preventDefault();

      href = $(this).attr('href');

      APP.External.request(href);
    });
  },

  request: function(href) {
    $.ajax({
      url: href,

      beforeSend: function() {
        $('#external').html('Carregando conteúdo...');
      },

      success: function(href) {
        $('#external').html(href);
      },

      error: function() {
        console.log('Ocorreu um erro!');
      }
    });
  }
}
