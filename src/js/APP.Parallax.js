var APP = APP || {};
APP.Parallax = {
  setUp: function() {
    this.initParallax();
  },

  initParallax: function() {
    var windowHeight;

    windowHeight = $(window).height();

    $(window).on('scroll', function() {
      APP.Parallax.move(windowHeight);
    });
  },

  newPos: function(x, windowHeight, pos, adjuster, inertia) {
    /*arguments:
      x = horizontal position of background
      windowHeight = height of the viewport
      pos = position of the scrollbar
      adjuster = adjust the position of the background
      inertia = how fast the background moves in relation to scrolling
  */
    return x + "% " + (-((windowHeight + pos) - adjuster) * inertia)  + "px";
  },

  move: function(windowHeight) {
    var pos = $(window).scrollTop(); //position of the scrollbar

    // $('#image-header').css({
    //   'backgroundPosition': APP.Parallax.newPos(top, windowHeight, pos, 1250, 0.3)
    // });

    $('#pattern-header').css({
      'backgroundPosition': APP.Parallax.newPos(0, windowHeight, pos, 1900, 0.6)
    });
  }
}
