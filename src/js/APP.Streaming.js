var APP = APP || {};
APP.Streaming = {
  setUp: function() {
    this.showVideo();
    this.tracking();
  },

  showVideo: function() {
    var that = this,
        link = document.URL + 'streaming',
        config = "menubar=yes,location=yes,resizable=yes,scrollbars=yes,status=yes,height=600,width=800";

    function btnEventHandler() {
        window.open(link, 'Streaming | Epicword 2015', config);
    }

    $('#streaming').on('click', btnEventHandler);
  },

  tracking: function() {
    console.log('Tracking...');

    $('#streaming').on('click', function() {
      var category, action;
          category = $(this).attr('data-track'),
          action = $(this).attr('data-action');

      ga('send', 'event', category, action);
    });
  }
}
