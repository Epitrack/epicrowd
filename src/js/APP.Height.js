var APP = APP || {};
APP.Height = {
  setUp: function(){
    this.getHeight();
  },

  getHeight: function() {
    var height, header, nav;

    height = $(window).height();
    header = $('#header-primary')[0];
    nav = $('#nav-primary')[0];

    $(header).css('height', height);
    $(nav).css('top', height-60);
  }
}
