var APP = APP || {};
APP.Countdown = {
  setUp: function() {
    this.initCountdown();
  },

  initCountdown: function() {
    var days, hours, minutes, seconds;

    days = document.getElementById('days');
    hours = document.getElementById('hours');
    minutes = document.getElementById('minutes');
    seconds = document.getElementById('seconds');

    $('#countdown').countdown('2015/03/25').on('update.countdown', function callback (event) {
      // print date
      days.innerHTML = event.strftime('%-D');
      hours.innerHTML = event.strftime('%-H');
      minutes.innerHTML = event.strftime('%-M');
      seconds.innerHTML = event.strftime('%-S');

      // set attributes
      days.setAttribute('data-time', event.strftime('day%!D'));
    });
  }
}
