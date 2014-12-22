var APP = APP || {};
APP.Scroll = {
  setUp: function(){
    this.getClick();
    this.getHeader();
    this.getClickArrow();
    this.hideArrow();
  },

  getClick: function() {
    var target;

    // nav links
    $('.nav-list').on('click', 'a', function(event) {
      event.preventDefault();
      target = $( $(this).attr('href') );

      APP.Scroll.smoothScroll(target, 30);

      // adds and removes active class
      $('.nav-list a').removeClass('js-nav-active');
      $(this).addClass('js-nav-active');
    });

    // footer link
    $('.scroll').on('click', function(event) {
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
    var that = this;

    $(window).on('scroll', function() {
      if ($(document).scrollTop() >= 585) {
        $('#nav-primary').addClass('js-fixed');
        APP.Scroll.addLogo();
        that.showArrow();
      } else if ($(document).scrollTop() <= 586) {
        $('#nav-primary').removeClass('js-fixed');
        APP.Scroll.removeLogo();
        that.hideArrow();
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
  },

  getClickArrow: function() {
    var that = this;

    $('#arrow').on('click', function(event) {
      event.preventDefault();
      target = $( $(this).attr('href') );

      that.smoothScroll(target, 30);
    });
  },

  showArrow: function() {
    var that = this;

    $('#arrow').show();
    that.changeArrow();
  },

  hideArrow: function() {
    var that = this;

    $('#arrow').hide();
    that.changeArrow();
  },

  changeArrow: function() {
    if ($(document).scrollTop() >= 4210) {
      $('#arrow').removeClass();
      $('#arrow').addClass('arrow bottom');
    } else {
      $('#arrow').removeClass();
      $('#arrow').addClass('top arrow');
    }
  }
}
