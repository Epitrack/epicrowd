var APP = APP || {};
APP.Scroll = {
  setUp: function(){
    this.getClick();
    this.getHeader();
  },

  getClick: function() {
    var target, href;

    href = window.location.href;

    $('.nav-list').on('click', 'a', function(event) {
      event.preventDefault();
      target = $( $(this).attr('href') );

      APP.Scroll.smoothScroll(target);
    });
  },

  smoothScroll: function(target) {
    $('html, body').animate({
      scrollTop: target.offset().top
    }, 2000);
  },

  getPosition: function() {
    $(window).on('scroll', function() {
      if ($(document).scrollTop() >= 585) {
        $('#nav-primary').addClass('js-fixed');
      } else if ($(document).scrollTop() <= 586) {
        $('#nav-primary').removeClass('js-fixed');
      }
    });
  },

  getPositionMobile: function() {
    $(window).on('scroll', function() {
      if ($(document).scrollTop() >= 400) {
        $('#nav-primary').addClass('js-fixed');
      } else if ($(document).scrollTop() <= 401) {
        $('#nav-primary').removeClass('js-fixed');
      }
    });
  },

  getHeader: function() {
    var iphone;

    iphone = navigator.userAgent.match(/iPhone/i);

    if (iphone == null) {
      APP.Scroll.getPosition();
    } else {
      APP.Scroll.getPositionMobile();
    }

  }
}
