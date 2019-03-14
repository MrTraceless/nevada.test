(function($) {

  $(document).ready(function() {
    var grid = $('.publications');
    grid.masonry();
  
    grid.imagesLoaded( function() {
        grid.masonry('layout');
    });
  });

})(jQuery);

