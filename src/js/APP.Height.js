var APP = APP || {};
APP.Height = {
  setUp: function(){
    this.getHeight();
  },

  getHeight: function() {
    var height, header, nav, navBarMobile;

    height = $(window).height();
    header = $('#header-primary')[0];
    nav = $('#nav-primary')[0];
    navBar = $('#navbar-header')[0];
    navBarMobile = $('.navbar')[0];

    $(header).css('height', height);
    $(nav).css('top', height-60);
    $(navBar).css('top', height-60);
    $(navBarMobile).css('top', height-60);
  }
}
