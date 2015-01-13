var APP = APP || {};
APP.Agenda = {
  setUp: function(){
    this.getAgenda();
    this.initAgenda();
  },

  initAgenda: function() {
    $('#agenda-tabs a').first().addClass('js-active');
    $('.tab-content').hide();
    $('.tab-content').first().show();
  },

  getAgenda: function() {
    var href, that;

    that = this;

    $('#agenda-tabs').on('click', 'a', function(event) {
      event.preventDefault();
      href = $(this).attr('href').replace('#', '');

      // add class to active
      $('.tabs-item a').removeClass();
      $(this).addClass('js-active');

      that.showContent(href);
    });
  },

  showContent: function(id) {
    $('.tab-content').fadeIn();
    $('.tab-content').hide();
    $('#' + id).show();
  }
}
