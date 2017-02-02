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

    $('#map-toggle-open').click(function() {
      setTimeout(function(){
      for(var entry in wpgmaps_localize) {
      InitMap(wpgmaps_localize[entry]['id'],'all',false);
      }
      },500);
    });

  });

})(jQuery, this);
