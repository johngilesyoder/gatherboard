(function ($, root, undefined) {

  $(function () {
    'use strict';

    $('#featured-events').carousel({
      interval: 6000,
      pause: null,
      keyboard: false
    });
    $('#event-bg').carousel({
      interval: 6000,
      pause: null,
      keyboard: false
    });
    $('#carousel-quotes').carousel({
      interval: null,
      pause: null,
      keyboard: false
    });

  });

})(jQuery, this);
