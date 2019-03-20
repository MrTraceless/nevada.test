(function($) {

  $(document).ready(function() {
    var grid = $('.publications');
    grid.masonry();
  
    grid.imagesLoaded( function() {
        grid.masonry('layout');
    });
  });

//Burger Menu

var Menu = {
  
  el: {
    ham: $('.menu'),
    menuTop: $('.menu-top'),
    menuMiddle: $('.menu-middle'),
    menuBottom: $('.menu-bottom')
  },
  
  init: function() {
    Menu.bindUIactions();
  },
  
  bindUIactions: function() {
    Menu.el.ham
        .on(
          'click',
        function(event) {
        Menu.activateMenu(event);
        event.preventDefault();
      }
    );
  },
  
  activateMenu: function() {
    Menu.el.menuTop.toggleClass('menu-top-click');
    Menu.el.menuMiddle.toggleClass('menu-middle-click');
    Menu.el.menuBottom.toggleClass('menu-bottom-click'); 
  }
};

Menu.init();

$('.menu').on('click', function (a) {
  a.preventDefault;
  $(this).toggleClass('burger__close');
  $('.main-nav__list').toggleClass('menu-right');
});


//Error Subscribe

    $(".wpcf7").on('wpcf7:invalid', function() {
      $('.container__outer').css('border-color', 'red');
  });

})(jQuery);


