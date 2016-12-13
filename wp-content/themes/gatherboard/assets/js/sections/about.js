(function ($, root, undefined) {

  $(function () {
    'use strict';

    $( "#map-toggle-open" ).click(function() {
      $( "#company-photos").fadeOut();
      $( "#map-replacement" ).fadeIn();
    });
    $( "#map-toggle-close" ).click(function() {
      $( "#map-replacement").fadeOut();
      $( "#company-photos" ).fadeIn();
    });

  });

})(jQuery, this);