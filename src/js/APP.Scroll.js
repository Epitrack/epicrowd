var APP = APP || {};
APP.Scroll = {
  setUp: function(){
    this.getClick();
    this.getHeader();
  },

  getClick: function() {
    var target;

    // nav links
    $('.nav-list').on('click', 'a', function(event) {
      event.preventDefault();
      target = $( $(this).attr('href') );
      console.log(target);

      APP.Scroll.smoothScroll(target, 30);

      // adds and removes active class
      $('.nav-list a').removeClass('js-nav-active');
      $(this).addClass('js-nav-active');
    });

    // footer link
    $('#link-getting-here, #link-lodging').on('click', function(event) {
      event.preventDefault();

      target = $( $(this).attr('href') );

      APP.Scroll.smoothScroll(target, 50);
    });
  },

  smoothScroll: function(target, offset) {
    $('html, body').animate({
      scrollTop: target.offset().top - offset
    }, 2000);
  },

  getPosition: function() {
    $(window).on('scroll', function() {
      if ($(document).scrollTop() >= 585) {
        $('#nav-primary').addClass('js-fixed');
        APP.Scroll.addLogo();
      } else if ($(document).scrollTop() <= 586) {
        $('#nav-primary').removeClass('js-fixed');
        APP.Scroll.removeLogo();
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
      APP.Scroll.goAbout();
    } else {
      APP.Scroll.getPositionMobile();
      APP.Scroll.goAboutMobile();
    }
  },

  goAbout: function() {
    $('#down').on('click', function() {
      $('html, body').animate({
        scrollTop: (590)
      }, 2000);
    });
  },

  goAboutMobile: function() {
    $('#down').on('click', function() {
      $('html, body').animate({
        scrollTop: (420)
      }, 2000);
    });
  },

  addLogo: function() {
    $('.nav-item').removeClass('col-xs-3');
    $('.nav-item').addClass('col-xs-2');

    $('.nav-logo').removeClass('invisible col-xs-1');
    $('.nav-logo').addClass('col-xs-4');
  },

  removeLogo: function() {
    $('.nav-item').removeClass('col-xs-2');
    $('.nav-item').addClass('col-xs-3');

    $('.nav-item:nth-child(2)').removeClass('col-xs-3');
    $('.nav-item:nth-child(2)').addClass('col-xs-2');

    $('.nav-logo').removeClass('col-xs-4');
    $('.nav-logo').addClass('invisible col-xs-1');
  }
}
